<?php 
class BlogPostController extends controller
{
	public function adicionar_blog_post() {
		$this->loadTemplate('create_blog_post');
	}
	public function salva_blog_post() {
		$dados  = $_POST;
		$blogPost = new BlogPost();
		$blogPost->salvaBlogPost($dados);
		header('Location:' . BASE_URL);
		exit;
	}
}