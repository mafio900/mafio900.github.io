<?php
namespace Controllers;

/**
 * Kontroller użytkowników
 */
class User extends GlobalController
{

    /**
     * Informacje wszystkich użytkowników
     * @return array
     */
    public function showAll()
    {
        $this->view->setTemplate('User/showAll');
        $this->view->addCSSSet(array('external/datatables'));
        $this->view->addJSSet(array('external/datatables', 'dataTables'));
        $model = $this->createModel('User');
        $result['data'] = $model->selectAll();

        return $result;
    }

    /**
     * Informacje o użytkowniku
     * @param  int $id
     * @return array
     */
    public function showOne($id)
    {
        $this->view->setTemplate('User/showOne');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array('external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/user'));
        $model = $this->createModel('User');
        $result['data'] = $model->selectOneById($id);
        return $result;
    }

    /**
     * Usuwanie użytkownika
     * @param  int $id
     * @return array
     */
    public function delete($id)
    {
        $this->deleteOne($id);
        $this->redirect('user/');
    }

    /**
     * Usuwanie kilku użytkowników na raz
     */
    public function deletePlenty()
    {
        $this->deleteGiven($_POST['ids']);
        $this->redirect('user/');
    }

    /**
     * Formularz dodawania użytkownika
     * @return array
     */
    public function form()
    {
        $this->view->setTemplate('User/addForm');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array('external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/user'));
    }

    /**
     * Dodawanie użytkownika
     * @return void
     */
    public function add()
    {
        $this->check(['Imie', 'Nazwisko', 'Pesel', 'Ulica', 'NrDomu', 'NrLokalu', 'Miejscowosc', 'KodPocztowy', 'NrTelefonu', 'Email', 'Ranga', 'Login', 'Password'], $_POST);
        if($_POST['Imie']=='' && $_POST['Nazwisko']=='' && $_POST['Pesel']=='' && $_POST['Ulica']=='' && $_POST['NrDomu']==''
         && $_POST['Miejscowosc']=='' && $_POST['KodPocztowy']=='' && $_POST['NrTelefonu']=='' && $_POST['Ranga']=='' && $_POST['Login']=='' && $_POST['Password']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('User');
        $model->insert($_POST['Imie'], $_POST['Nazwisko'], $_POST['Pesel'], $_POST['Ulica'], $_POST['NrDomu'], $_POST['NrLokalu'], $_POST['Miejscowosc'],
        $_POST['KodPocztowy'], $_POST['NrTelefonu'], $_POST['Email'], $_POST['Ranga'], $_POST['Login'], $_POST['Password']);
        $this->redirect('user/');
    }

    /**
     * Edytowanie użytkownika
     * @return void
     */
    public function edit()
    {
        $this->check(['id', 'Imie', 'Nazwisko', 'Pesel', 'Ulica', 'NrDomu', 'NrLokalu', 'Miejscowosc', 'KodPocztowy', 'NrTelefonu', 'Email', 'Ranga', 'Login', 'Password'], $_POST);
        if($_POST['Imie']=='' && $_POST['Nazwisko']=='' && $_POST['Pesel']=='' && $_POST['Ulica']=='' && $_POST['NrDomu']==''
         && $_POST['Miejscowosc']=='' && $_POST['KodPocztowy']=='' && $_POST['NrTelefonu']=='' && $_POST['Ranga']=='' && $_POST['Login']=='' && $_POST['Password']=='' && $_POST['id']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('User');
        $model->update($_POST['id'], $_POST['Imie'], $_POST['Nazwisko'], $_POST['Pesel'], $_POST['Ulica'], $_POST['NrDomu'], $_POST['NrLokalu'], $_POST['Miejscowosc'],
        $_POST['KodPocztowy'], $_POST['NrTelefonu'], $_POST['Email'], $_POST['Ranga'], $_POST['Login'], $_POST['Password']);
        $this->redirect("user/".$_POST['id']);
    }

}
