<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2015 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class controller_welcome extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
	    $data = array();

	    $email = Input::post('email');
	    $content_feedback = Input::post('content_feedback');
	    if(!empty($email) && !empty($content_feedback)) {
	    	$message = 'Your feedback is sent successfully!';
	    	$data = array(
	    	    'email' => $email,
	    	    'content_feedback' => $content_feedback,
	    	    'message' => $message
	    	);
	    }

		return Response::forge(View::forge('welcome/index', $data));

	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}




	/**
	* Buy products
	*
	* @return string
	*/
	public function action_buy()
	{
		$a = TRUE;
		if ($a)
		{


				echo "1";
		}
		else
		{
				echo "2"		;
		}
		return "Buy products";
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
