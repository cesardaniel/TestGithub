<?php
	
class ListTaskController extends BaseController
{

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