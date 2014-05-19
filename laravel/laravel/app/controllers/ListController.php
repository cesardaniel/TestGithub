<?php
	
class ListController extends BaseController
{

  public function getNewList()
  {
    // Return view for creating a new list
    return "Return view for creating a new list";
  }

  public function postNewList()
  {
    // Target for POST form, run validation etc then create list
    return "Target for POST form, run validation etc then create list";
  }

  public function index($list_id)
  {
    return "Showing all tasks for list $list_id";
  }

  public function show($list_id, $task_id)
  {
    return "Showing task $task_id for list $list_id";
  }

}

?>