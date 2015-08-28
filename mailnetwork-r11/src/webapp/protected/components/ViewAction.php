<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class ViewAction extends CViewAction
{

	/**
	 * Runs the action.
	 * This method displays the view requested by the user.
	 * @throws CHttpException if the view is invalid
	 */
	public function run()
	{
		$this->resolveView($this->getRequestedView());
		$controller=$this->getController();
		if($this->layout!==null)
		{
			$layout=$controller->layout;
			$controller->layout=$this->layout;
		}

		$this->onBeforeRender($event=new CEvent($this));
		if(!$event->handled)
		{
			if($this->renderAsText)
			{
				$text=file_get_contents($controller->getViewFile($this->view));
				$controller->renderText($text);
			}
			else 
			{
				// Added support for pageTitle
				$controller->render($this->view, array('pageTitle'=>$this->getRequestedView()));
				$this->onAfterRender(new CEvent($this));
			}
		}

		if($this->layout!==null)
			$controller->layout=$layout;
	}
	
}