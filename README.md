In Progress

●	A user can create new posts, edit his posts and comment on his or other posts. <br />
	Front End <br />
	/resources/views/home.blade.php <br />
	Back End <br />
	/database/migrations/2017_06_15_182441_create_posts_table.php <br/>
	/database/migrations/2017_06_20_181757_create_comments_table.php <br/>
	/app/Comment.php <br />
	/app/Post.php <br />
	/app/User.php <br />
●	Upon user log in, a user lands on the main forum page and sees all the posts. <br />
	Front End <br />
	/resources/views/home.blade.php <br />
	Edit Home to display all posts and comments. Add buttons or links for create, edit post/comments <br />
	Create Blade for post and comments. <br />
	Back End <br />
	/database/migrations/2017_06_15_182441_create_posts_table.php <br />
	/app/Http/Controllers/PostController.php <br />
	/app/Http/Controllers/CommentController.php <br />
●	User may edit their biography and user name only. <br />
	Front end <br />
	/resources/views/layouts/app.blade.php <br />
	Back End <br />
	/database/migrations/2014_10_12_000000_create_users_table.php <br />
	/app/Http/Controllers/EditprofileController.php <br />
	The EditProfileController is doing nothing? Will get back to this later. <br />

Done

●	Users can log in with email and password or register, <br />
●	When a new user is registering for the site, the basic information that is collected is the following: First Name, Last Name, Email which is unique, Password and a unique User Name. <br />

Optional

●	A user can only remove his post or his comment. <br />
●	Admins can remove any post, deletion of posts should also delete the comments associated with the post. <br />
●	Admins can assign user roles as remove them. <br />

