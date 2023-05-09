# Gramercy Tech Assessment 

This repository defines a simple CRUD blog which allows the user - following proper registration and/or authentication - to create/view/edit/delete blog posts, as well as create/edit/delete comments on those blog posts (as long as they are the author).

**Technical Requirements:**
1. PHP >8.0
2. Node >16.0/NPM >8.0.0
3. Composer

**Installation Steps:**
1. Download .zip of repo or clone via Github CLI: gh repo clone cschreger/gramercy-tech-blog 
2. After navigating to root directory of project run the following commands in your terminal:
- composer install
- npm install (requires node version >16 for proper installation of Vite)
- touch .env (to create local environmental file)
- insert the following values into your .env file
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:NFPntej8s4W1qj3QgobgVujc5u+NVBXBDFnyxQAtPOo=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=sqlite
```
- run the following commands after saving .env file:
```
php artisan key:generate
php artisan migrate
php artisan serve
```
- in a separate terminal window run (concurrently):
``` 
npm run dev
```
- navigate to localhost:8000 in your browser and you will be routed to the login/registration page

# App Navigation

## Login/Registration

The following validation rules have been set for registration (and user is notified if any of the following criteria are not met):
- First and Last Names must each be longer than 2 characters
- Email must be a validly formatted email address
- Password must be at least 6 characters in length
- Confirm Password field must match password field

After successfully logging in/registering, you will be brought to the main "posts" page (posts for all users), which will be blank upon initial registration.

## Posts

To create a post, either select "Create Post" on the top header nav or navigate to localhost:8000/posts/create. In order to create a post, the following 2 fields are required:
- Post Title
- Post Body

Upon successful creation of a post, you will be brought to that post's show page, where you can view information about the post (title, author, body, date created) as well as add a comment.  
    - Note: You can also view information/add comments directly from the posts index page (localhost:8000/posts). 
    
In addition to viewing posts from all users by either selecting "View All Posts" from the header nav bar or navigating to localhost:8000/posts, you may also access a list of all of _your_ posts by selecting "View My Posts" or by navigating to localhost:8000/profile/posts.

### Editing Posts

If you are the author of the post, you have the ability to edit the post title/body via a simple form accessible from any location where the post is visible (View All Posts, View My Posts, Individual Post Show Page).
- You can also delete a Post from this same edit page
- You may only edit or delete a post if you are the original author of that post.


## Comments

Comment functionality and permission restrictions largely follows that of Posts, with the notable exception that there is no "individual comment show page".

## Contact

For any questions and/or assistance, please don't hesitate to reach out directly to Cade Schreger at cschreger@gmail.com. Thank you and Happy Blogging!
