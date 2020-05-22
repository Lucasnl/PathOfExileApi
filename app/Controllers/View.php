<?php namespace App\Controllers;

class View extends BaseController
{
	public function ViewChar()
	{
       
        
        $charName = $_GET['charName'];
        $accountName = $_GET['accountName'];


        

        $data['data'] = json_decode(@file_get_contents("https://www.pathofexile.com/character-window/get-items?accountName=".$accountName."&character=".$charName.""));






        return view('viewCharacter',$data);
    }


	


}

