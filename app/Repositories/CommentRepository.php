<?php

namespace App\Repositories;
 
use App\Comment;

Class CommentRepository implements CommentRepositoryInterface{

	public function list(){
		return 'called via interface';
	}
}