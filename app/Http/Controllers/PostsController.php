<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class PostsController extends Controller
{
    public function store(Request $request)
    {
    	$user = Sentinel::getUser();

        /* 
           for multiple permission we have to use array, just like this 

           ** if($user->hasAccess(['posts.create', 'posts.update', 'posts.delete'])) || note:every permission have to be true to continue
               
           or 

           ** if($user->hasAnyAccess(['posts.create', 'posts.update', 'posts.delete'])) || note:any of this permission have to be true to continue

           or

           ** if($user->hasAccess('posts.*')) | note: * means every permission           
        */

    	if($user->hasAccess('posts.create'))
    		return $request->all();
    	abort(403, 'Unauthorized action.');
    }
}
