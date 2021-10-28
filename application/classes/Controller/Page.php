<?php

class Controller_Page extends Controller
{
    public function action_index()
    {
        $view = View::factory('pages/show');
        $index_page = $view->render();
        $this->response->body($index_page);
    }

    public function action_about()
    {
        $id = (!empty($this->request->param('id'))) ? $this->request->param('id') : 0;

        $data = array('id' => $id);
        $view = View::factory('pages/about', $data);

//        $this->response->body('hello, world!' .  $id);
        $index_page = $view->render();
        $this->response->body($index_page);
    }
}