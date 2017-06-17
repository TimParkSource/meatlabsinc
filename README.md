Required

●	A user can create new posts, edit his posts and comment on his or other posts.

Optional

●	A user can only remove his post or his comment.
●	Admins can remove any post, deletion of posts should also delete the comments associated with the post.
●	Admins can assign user roles as remove them.

In Progress

●	Upon user log in, a user lands on the main forum page and sees all the posts.
	Front End
	/resources/views/home.blade.php
	Back End
	/database/migrations/2017_06_15_182441_create_posts_table.php
●	User may edit their biography and user name only.
	Front end
	/resources/views/layouts/app.blade.php
	Back End
	/database/migrations/2014_10_12_000000_create_users_table.php

Done

●	Users can log in with email and password or register, 
●	When a new user is registering for the site, the basic information that is collected is the following: First Name, Last Name, Email which is unique, Password and a unique User Name.
