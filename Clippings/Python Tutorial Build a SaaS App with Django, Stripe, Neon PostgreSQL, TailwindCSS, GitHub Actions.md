![](https://www.youtube.com/watch?v=WbNNESIxJnY)

⭐️ Launch V1 of your SaaS this weekend: https://www.paracord.co/?promo=FOUNDERS75 ⭐️  
  
Topics:  
✅ Python web development with Django  
✅ Sending Emails with Gmail  
✅ Django AllAuth + GitHub Login  
✅ Deploy to Railway (https://kirr.co/qysgeu)  
✅ Integrate Neon Postgres  
✅ Django Groups and User Permissions  
✅ Django + Stripe Integration  
✅ Stripe reoccurring payments via Products/Prices API  
✅ Django Management commands to sync Users subscription status with correct permissions  
✅ Django management commands for pulling vendor css/js (tailwind/flowbite) for container-based builds  
✅ Django with whitenoise  
✅ Scheduled GitHub Actions Workflows to sync prod database with stripe status (e.g replacing a Celery beat server)  
✅ Using Neon Branching for Postgres in GitHub Actions to leverage production data without touch production data  
✅ Python Decouple for env vars  
  
Thank you to Neon for sponsoring this course  
  
🚀 Enroll now on https://cfe.sh/enroll 🚀  
  
💽 Code: https://github.com/codingforentrepreneurs/SaaS-Foundations  
💽 Blog on Deploy Django on Railway with Dockerfile: https://kirr.co/2sn6eg  
💽 Secret Key for Django \[blog post\](https://www.codingforentrepreneurs.com/blog/create-a-one-off-django-secret-key/)  
  
📽️ Chapters  
00:00:00 Welcome  
00:00:33 Overview  
00:06:10 What you need to know  
00:08:19 Start Django Project  
00:18:57 Your First HTML Webpage with Python Functions  
00:28:27 Rending HTML Documents  
00:33:33 Using Django Templates  
00:43:46 Django Template Inheritance, Conditions, & Include  
00:53:39 Store and Retrieve Data Part 1  
01:03:59 Store and Retrieve Data Part 2  
01:11:17 Push to GitHub via Git  
01:18:12 Prepare for Production Environment  
01:25:28 Deploy Django to Railway with Docker Containers  
01:41:57 The Hard Way to Manage Environment Variables  
01:48:00 dotenv and Python Decouple to Manage Environment Variables  
01:56:33 Provision a Serverless PostgreSQL Database with Neon  
02:03:50 Integrate PostgreSQL with Django  
02:11:21 Neon in Production + Database Branching  
02:18:06 Styling with CDN for TailwindCSS and Flowbite  
02:25:42 Configure Django Static Files in Dev  
02:38:57 Download Url to Local File Helper Function  
02:43:16 Custom Django Management Command to Pull Vendor Files  
02:55:06 Missing Args with Container Build in Railway  
03:01:19 Using WhiteNoise to Serve Django Static Files  
03:12:09 Configure Django to use Email with Gmail  
03:22:15 Django Admin User + User Passwords  
03:33:20 Django Login View Logic  
03:41:45 HTML Login Form and Template  
03:52:46 Register Users the Hard Way  
04:03:19 Configure Django AllAuth  
04:15:10 User Email Verification with Django AllAuth  
04:17:25 Better UI for Django AllAuth  
04:28:24 Navbar Links for Auth  
04:35:31 Login with GitHub via Django AllAuth  
04:44:20 Password Protected Page with Django Sessions  
04:52:22 User-required Pages via login\_required Decorator  
04:55:43 Staff User Required  
05:01:22 User Profile View  
05:09:43 User Permissions and has\_perm  
05:20:32 User Permissions in Django Templates  
05:29:45 Groups & Group-level Permissions  
05:33:18 Custom Permissions for Django Users  
05:41:27 Groups and Permissions within Subscriptions  
05:49:07 Syncing Subscription Groups and Permissions  
05:56:35 Sync User Subscription with the User Group Part 1  
06:02:58 Sync User Subscription with the User Group Part 2  
06:12:41 Getting Started with Stripe  
06:19:49 Django Customer Model  
06:24:48 Override Django Save to Create Stripe Customer  
06:37:10 Django All Auth Signal to Confirm Django Stripe Customers  
06:51:40 Our Django Subscription Model as a Stripe Product  
06:57:01 Subscription Price Model  
07:09:33 Manage Prices in Django Admin with Tabular Inlines  
07:15:41 Featured and Ordered Pricing  
07:24:26 Subscription Pricing View & Template  
07:29:39 Pricing Table based on QuerySets  
07:42:16 Pricing Interval Toggle Views  
07:50:26 A Django Session Based Checkout Process  
08:01:55 Stripe Checkout Session  
08:12:57 Stripe Checkout Finalize View in Django  
08:22:27 Successful Purchase to User Subscription Model  
08:35:03 Auto Cancel Subscription on New Plan  
08:44:54 Adding Subscription Billing Period Dates  
08:58:20 User Subscription Status Field  
09:04:59 User Subscription View and Refresh  
09:18:16 User Subscription Cancel View  
09:30:35 Cancel Dangling User Subscriptions  
09:41:21 Custom Django Management Command with Arguments  
09:47:23 Subscription Refresh Utility Function  
09:56:40 Custom Django Model QuerySets and Model Managers  
10:05:03 Filtering Django Models with Datetime Objects  
10:18:57 Hello World from GitHub Actions  
10:28:45 Testing Django Basics with GitHub Actions  
10:35:18 Environment Variables in GitHub Actions  
10:41:00 Github Actions Secrets for Database URL  
10:47:38 Branch Neon DB for Django Tests  
11:01:41 Scheduled Production Worker with Django Neon Stripe and GitHub Actions  
11:18:00 A Better Landing Page with Flowbite  
11:27:19 Using the SaaS Theme to Fix Missing Tailwind Classes  
11:31:39 Dashboard View  
11:37:12 Dashboard View  
11:49:13 Thank you and next steps

## Transcript

### Welcome

**0:00** · imagine for a moment if 10 people were giving you $50 a month every month for some code you wrote in a weekend now with this course I actually want to help you get to that point but of course if you could do 10 people what's going to stop you from getting a 100 or a th000 or 2,000 now yes there is a big difference between 10 and 2,000 but the idea here is if you can provide value with your code why wouldn't you and so

**0:24** · what I want to show you is how to actually build your very own SAS application using a lot of modern technology so let's take a look and talk about the course right \[Music\] now this is the SAS foundations course of course we have all of the code available for free alongside of this free course the idea here is you can use

### Overview

**0:46** · this code for any of your projects at any time just Fork it and give it a run go through the read me if you want to get it exactly working correctly but the idea here is we're going to be using jeno jeno is a web framework built in Python and python itself is a incredibly

**1:02** · powerful language that makes it really easy to build stuff like jeno jeno has a lot of batteries included as you'll come to learn but the idea is Jango is scalable it helped Instagram and Pinterest scale but it also has things like user authentication built into it

**1:18** · this also means user groups permissions like can a user do this or that loging in logging out saving your password in the database uh you know securely like a lot lot of things might not D Jango has been doing that for a very long time now in addition to D Jango we also use something like Jango allof to do our regular authentication so it kind of gives us a bunch of different views and simple ways to make sure that we can log our users in and send them an email to

**1:47** · confirm their email all of that is done with allaf but it also has this ability to do social authentication so in our case we're going to take a look at how to do GitHub authentication so you can log in with your GitHub account to your SAS application which I think is actually fairly important once we actually solve all that stuff we'll also use Gmail as the email service and I'll show you the modern ways to use Gmail for that I don't recommend doing this in the long run as I'll say in the course itself but it is kind of cool that we can do that still but the idea here is

**2:17** · once we have our users in place we also want to start charging our users the way we're going to do that is by using stripe and specifically subscriptions and stripe one-off payments and stripe are so easy to do so like e-commerce and stripe is much easier to do than subscriptions but subscriptions if you get it right it can be far more profitable than e-commerce so the idea here is we need to make sure that stripe and D Jango are working well together in terms of subscriptions and what users

**2:45** · can actually have access to a big part of the way we're going to do this is by using GitHub actions and all of these different workflows to make sure that we have a way to do a schedule production worker in other words this workflow right here is going to run run on a schedule and it's going to do some D Jango management commands for us now this is only possible because of a key part of this course which is actually using neon so neon is the database

**3:12** · service that we're going to be using which is postgres itself it's open-source database but it's specifically on serverless which means it only runs when we need it to run and it runs incredibly fast I totally agree with this statement that you can ship faster with postgres and just the GitHub

**3:30** · action workflows alone for those of you who have never used neon hopefully will excite you to actually get neon on your radar so that's why I partnered up with them that it's a really fantastic way to do all this but the other part that's really cool is we can actually test production like data so if we look at our neon DB Branch we can do our

**3:52** · production database we can grab our production database we can make something called a branch which is a copy of our production database and then we can test or do things based off of that production data now you might not actually run your standard tests with Jango on production data maybe there's not a good reason for that so realistically something what you might actually do is doing something like syncing your user subscriptions or

**4:17** · clearing out dangling ones that shouldn't be there anymore so it cancels subscriptions that have been cancelled and all of that is possible thanks to Neon so those are two key aspects of this D Jango Neon and then of course doing stripe itself that's a big part of

**4:34** · this course we will also be using flow bite and Tailwind CSS flow bite is just a quick way to build all sorts of Tailwind components so that it looks like a professional application like this this is our actual application right here that we will be implementing inside of our project now it's actually fairly empty a big part of the reason it is fairly empty is because your codee's not in there yet this is a foundational code this is meant so you have all of

**5:01** · that other stuff working working well so that you can iterate and build on top of it we will also be deploying to railway but this is just a small portion just to make sure that we can see the deployment process in all of this if you have neon

**5:16** · as your database you can deploy almost anywhere Railway is just an example we'll go through and we'll be using Docker container in here as well so you can see how all of that is done also but a lot of that is still somewhat foundational for what we'll end up building and so what you can see is you can go through all of this code there is a lot of it that we go through to make sure that your application is up running

**5:39** · working and you have all these foundations down so that's it that's all we really need to do at this point I will talk about the requirements here a little bit but the idea being that the D Jango project itself will be responsible for the vast majority of the logic to help orchestrate all of these things so that you can give your users the code that will bring them a lot of value and hopefully Change Your Life by building out your own SAS application let's take a look at the actual requirements to do well in this course right

### What you need to know

**6:13** · now to do well in this course I recommends you have some experience with python specifically Python 3 but mostly so that you can write classes and functions you can do things with lists and dictionaries you can do math with integers and floats if you know those things you'll be good to go if all of that sounds a little confusing to you at this point check out my 30 days of python course this goes through all of those fundamentals yes it uses an older

**6:39** · version of python than what we use in this course but it's still Python 3 so you'll still get a lot of those foundations down because python is python now in addition to python knowing CSS and HTML is a huge plus these things build up the internet I don't really go into that much detail on them but I do show you a lot of things related to what we need them for so you could always copy and paste as well and just kind of wing it as I do with a lot of different

**7:07** · things but knowing them will be beneficial now having some experience with d jeno is probably a good idea but it's not required if you find yourself getting kind of lost with the D Jango stuff check out my try Jango series on my website or on YouTube both of them or any of them will actually teach you a lot of fundamentals about D jeno I also have a fundamental D jeno course in here as well called your first jeno project

**7:33** · and in there I go through some of the basics as well that you might want to learn more about jeno and then the final thing is just downloading Visual Studio code this is the free version of Visual Studio code but the idea being this is what we'll use to actually write all of our code and it is incredibly helpful there's a lot of different plugins in there that you can download as well to make it even easier on you as you build out this entire project but that's

**7:58** · really it there's not a whole lot more to it than that I mean knowing stuff like git is also something that you might want to know but I'll talk about that when we get there the idea being just being able to track our code and put it onto GitHub that is definitely a bonus that you might want to have at this time but with all that said let's go ahead and jump right into the

### Start Django Project

**8:22** · course let's go ahead and set up our project inside of vs code what this means is we're going to go ahead and create a new folder we're going to save some things related to vs code then we're going to create a python virtual environment then we'll install D jeno then we'll run a jenu command to create our project the Baseline project inside

**8:42** · of a specific folder for it so let's go ahead and get that started first off inside of the Explorer window inside of vs code we're going to go ahead and open up a new folder here and I'm going to navigate into where I want to store this project in my case I store the projects inside of my main user inside of the dev

**8:59** · folder that's where I have all sorts of projects in here I'm going to create a new folder and I'm just going to call this SAS you could call it SAS foundations if you like uh but I just want to call it SAS just to make it really short and easy to get back to I'm going to go ahead and create that and we'll go ahead and open this right off the bat as soon as I create a project inside of vs code I always save the

**9:21** · workspace so we go ahead and do save workspace as and then we just hit save there you go so this is now a vs code project they can use for any programming language including the one we're about to do now that I've got that I'm going to go ahead and create a new folder here this folder I'm going to call it SRC this is where I want Jango to live this is where I'm going to put all of my things related to D jeno next I'm going to go ahead and create a requirements.txt file this is python

**9:50** · specific not Jango specific however we will put a Jango version in here and this version I want it to be greater than or equal to 5.0 0 and then less than or equal to 5.2 now the reason for this is that I actually don't want this to upgrade past 5.0 until I actually

**10:09** · have the code tested beyond that so maybe we even want it at just 5.1 this is an optional step of course you could probably use the latest version of D Jango and be fine D Jango versions don't change drastically but when they have little changes here and there it makes a big difference on how you actually end up using them this so with this in mind I now have a requirements file and a location as to where I want to store Jango so what you

**10:36** · could do now is verify that you have python installed on your local machine but in my case I actually don't right at least this version of python this is for python 2 for those Mac users if you're on Windows you might actually see something come out from this now how did I get here of course I actually am toggling the terminal window here with control Tilda which of course is inside of the terminal command here and you can see exactly what you need to do in there

**11:05** · as well so get used to this command in my case it's just control Tilda and it will toggle that but here we go now I'm inside of the root of my Jango project as you can see here that's one of the nice things about using visual studio codes terminal is it's going to be in the root of that project so now what we need to do with every python project is we need to create a virtual environment of some kind I use py Pyon and I use Python 3 and then again we can verify the version python 3-m V andv this is

**11:37** · the built-in virtual environment manager that python has there's a lot of them out there I've had the best success with this one for the for a long time it's actually a really good one once you have this you actually then name your virtual environment I use V andv and then I hit

**11:53** · enter and then it creates that virtual environment and there's the folder there now notice that VSS code says it detect protected a new environment do we want this to be for the workspace folder we'll go ahead and say Yes basically what that means is when I open up a new terminal window it's going to go ahead and automatically activate that for me now if for some reason it doesn't automatically activate it for you the way you activate it is by using Source VV Ben activate for mac and uh Linux

**12:22** · users if you're on Windows it's going to be something more like VMV scripts and activate spelled correctly and it's going to look a little bit more like that now with this in mind I'm going to go ahead and run my requirements installation now you might be familiar with the processes of doing something like pip install Jango like that but what I want to do is get in the habit of using requirements.txt so I'll just go ahead and do my pip install we'll do pip install d r requirements.txt this of

**12:52** · course will install everything that's listed out inside of those requirements and in this case I have it between vers verions so I'm using the latest version of D jeno 5 not 5.1 not 5.2 not 6 not any future version and not even any past version just those versions right there and then I'll be able to do various commands for jeno next up I actually want to upgrade pip as well this is a process that you want to do from time to time just to make sure that your python package installer is upgraded now in

**13:23** · production what you probably want to do is actually python DM pip install but we'll go ahead and skip that that for now and just use pip directly so now we're at the point where we need to create our D Jango project now do keep in mind I'm going in through the nitty-gritty details for those of you who have never done this before now if you've done this once or twice I just want to clarify things just so as we go

**13:46** · forward you have a better understanding of how to use these commands as you might need to going forward cuz sometimes if this part trips you up then you're not going to get a whole lot out of this series so with that in mind let's go ahead and actually create our Jango project now do keep in mind I'm in the root of the actual VSS code workspace the root of the project itself I'm not in the root of where I want to store the code where I want to store the code is in this SRC folder here so that means I need to navigate into SRC with

**14:17** · this CD SRC and if I do PWD I can see where I'm located if you're on Windows you might be able to use dir uh to see where you're located as well but of course if you're using windows power shell PWD should work for you as well now at this point Jango should be installed so if we do pip freeze we should see that Jango is installed in there there's other things as well but at least D Jango 5 is installed in there

**14:43** · with that in mind I should be able to do Jango admin and then run a various commands related to the D Jango admin command if that is not installed for some reason or it's not running for some reason just close out all of your terminal windows open up a new terminal make sure your virtual environment is activated in my case it is and then navigate back into that SRC folder and then run your Django admin and then you can actually run just Jango admin by

**15:09** · itself so you can see all of the sub commands that are available for it so in our case we're going to go ahead and use the start project command but there are a lot of other commands that you might want to look into some of them we will definitely use like run server make migrations migrate and so on uh but at this point I'm just going to go ahead and run the start project command so we'll do Jango admin let me just clear this out real quick so D Jango and then- admin start project now we want to name

**15:39** · our project something I always name my projects CFE home and then I put a period at the end remember I'm inside of the SRC folder as it even shows me over here but the fact that I'm using this period means that it's going to create the project right inside this SRC folder if I did not create that period it would create a another folder and have that Jango project within that folder so if I hit enter and run that it then creates

**16:05** · my Jango project here for me this Command right here this process I've done for years this works for old versions of Jango even Jango like 1.6 the same process works all the way from back then now it's just Jango 5 and we're able to actually get this thing going from here so from there we're going to go ahead and just run python manage.py run server and hit enter notice no that I actually have python

**16:31** · not Python 3 running on here and of course if I were to open up my terminal window on my main machine and run python D- version I get this python command not found this of course is because of the virtual environment that is activated inside a vs code it's actually able to run things like this another reason to

**16:51** · use those virtual environments is it will actually allow you to just run this simple python command based off of the Python version that you used to create the virtual environment which all that information and all those details are inside of that VV folder itself and the coolest thing is you can always delete this VNV and start all over whenever you need to so at this point I'm going to go ahead and open up the hello world page and here it is and of course hello world

**17:18** · in terms of D Jango just gives you this we want to extend this we want to make it a real Hello World with our own data and with our own stuff on here but at the at this point you now have a Jango project working it's just a matter of configuring things there's a lot of things to configure but that's where we're going to go from here so if this was too fast for you or you're not really sure as to what's going on hopefully the next few videos will help clarify more and more of this this is

**17:48** · roughly the pace I'm going to go it might speed up as we get a little bit into a little bit more advanced topics throughout this series but the general idea is from this now I'm going to be using the arc web browser as well but you can use any web browser and you should see the exact same thing as we see here so going forward this is what we're going to be doing and this is what we're going to be working off of inside of vs code and with this project now at

**18:13** · some point we will Implement Version Control or git that will happen actually pretty soon because we want to actually see how that's done so in the future part of this course you will see various code that might change so worst case scenario if the code does change and you're having struggles finding the exact code itself go into our GitHub it's easiest cf.

**18:33** · GitHub you find the SAS foundation's actual code repo and you'll be able to see the code for various things and I'll have a lot of different instructions on here based off of issues or anything you might find for this one because I really want to help you guys build those projects and have them real and out there in the real world let's go ahead and take a look at how to actually start using Joo right now

### Your First HTML Webpage with Python Functions

**19:01** · now when it comes to using D Jango one of the fundamental things that Jango does is render HTML documents now of course HTML is what builds up the actual internet every web page ever has HTML on it so on any web browser you can go to view page source and you can quite literally see all of the HTML that builds up that page now it doesn't give you all of the secret sauce and even if you could somehow edit the HTML on on

**19:28** · your web browser that has nothing to do with how everyone else sees it as you might be well aware but jeno itself is a web framework so like every other web framework that exists at the core all it really does is render HTML the way Django does it is very pythonic it uses python functions or if you want to get a little bit more complicated classes you can actually just build out python functions to return HTML to actually build out your various HTML pages and it

**19:59** · it does this using programming of course so what I want to do is start off with creating our very first view the actual function that's responsible for rendering HTML and then also route the traffic that goes there so to do this inside of CFE home inside of that root Django configuration folder next to settings.py we're going to go ahead and create views.py we're going to hit enter

**20:24** · here and I'm just going to Define my first view I'm going to call this function homepage View and then it's going to return something I just said it needs to return HTML or renders HTML that's jango's core function that's the Baseline function of what D Jango does is render out HTML so this is a simple

**20:46** · python function that doesn't do a whole lot in fact it does basically nothing so what I wanted to do is I wanted to return back some sort of HTML so for now I'm going to go ahead and run from Jango go. HTTP we're going to import the class of called HTTP response notice there's one for request and we want the one for response so this means it's going to return an HTTP response which is how we

**21:14** · return HTML so in my case I'll just give an H1 tag here of hello world with a closing off H1 tag now if you know HTML really well you know that this is poorly formatted HTML that's not really the point here the point here is that this is HTML formatted text and of course

**21:34** · it's in a string itself because if it wasn't in a string it would no longer be valid python right so we still need to write valid python out we still need to put things in strings but the idea behind HTML itself is it's really just a document a document full of strings that's it it's not it's not you know bite text it's just strings it's not a PDF file it's not a you know a video

**21:59** · it's not an image it's just strings that's it so that's what we want to return great so we're really close to having our first ever view but the thing is the view itself actually has additional arguments that come in here one such argument is the request itself I'll explain that in just a moment and then we can actually pass in the ARs and keyword args basically the catchall for any other kind of argument that might be passed into the actual function itself for the homepage view really we only

**22:32** · need request but since you're new to this program ideally or in theory you put in args and keyword args just to make sure that you don't have any issues that happen because you don't know the arguments that need to go through with any given view so now that we've got this view we created this function now we call it views.py because that is the way jeno determines it now we could call

**22:55** · it other things as well we could call this Pages the we wanted to because of how we'll end up importing it but the thing is we want to follow convention we want to follow what other jeno developers do both in terms of if we ever work with other Jango developers they will have an idea of where to find these things but also so when we actually look up documentation or we use an AI to spit out things for us we'll at

**23:18** · least have a better understanding of how to name the different files and all that so with this in mind with views in here I'm going to go into EUR up high here and now I'm going to go ahead and import that function so we'll do from. views we're going to import the actual homepage view function in here great so

**23:39** · now what I'm going to do is I'm actually going to route a URL path to this homepage view so the way we're going to do that is by using the path function that jeno provides then we pass in where we want it to go so we get say hello-world with a trailing slash and

**23:56** · then we actually pass in The View function as like a call back Handler and then we are going to go ahead and put a common here because all of the URL paths are going to go in here now if you're not familiar with URL paths or at least that term you're definitely familiar with how it works in the sense that if you go to any web page and click on a link what's going to happen is that link changes the actual path itself changes in this case it says doc so we're basically doing that same thing we're designing where those URLs are going to go we're designing the logic for it so

**24:28** · now now with all this in mind we have our basic web page ready to run so opening up the terminal window let's make sure we're in the SRC folder here we're going to run python manage.py run server this emulates what would happen in production when we deploy it to the internet and then I can actually open up this URL here and go ahead and take a look at my new page now this actually

**24:51** · looks different than what we saw before so if I close this out and then comment out the URL patterns just comment out that one single line there and then open this again make sure you're saving things of course I just hit command s all of the time or controls all of the time you just won't see me do it but the idea being is this is the standard hello world page but as soon as I add in my own URLs in here that page goes away I

**25:16** · save that and now it's going to say hey I can open this up and I get a page not found why I get a page not found is because these are the paths jeno is looking for these are the only paths that have some sort of logic behind it some sort of function that will actually handle that URL path so now I can actually come in here and say something like hello-world and hit enter and there is that page wow fantastic very very

**25:43** · fascinating now of course that function itself we could reuse again and I could just do an empty path here this is going to be like the index page or the root page that's another way to think of that as well I can save that Now open up that

**25:59** · URL again and there it is on that homepage it now says hello world it does not say uh the page not found anymore and of course if I go into the other page of hello world it's still there that is probably going to remain I'm probably going to keep that page in there to some degree on these different paths so what you've learned to do now is you've learned how to create a basic function that can return back some HTML code and then you create a URL to Route

**26:30** · the web page to that function which is super nice now if you're familiar with the HTML of it all as in you've built HTML websites before what's cool about this is you can still use HTML in here you could do something like this where as soon as you save it it will refresh you can open up that web page and then you can go into you know um the same thing of hello-world HTML hit enter and it's

**26:56** · still rendering that out and it's shows me that HTML so what's happening here using Jango I have the ability to write out any sort of URL path that I want to then be rendered on any sort of function that I want just as long as you're using

**27:13** · the correct way of returning back the correct response so if you came in here and just said return you know hello world and save it you're going to get an error it gets this string attribute has no object git the error that's happening here is because Jango has a lot of things that are built into it to secure your responses that security comes in when you use something like HTTP response to make sure that you are using the actual valid way to return back HTML

**27:42** · in this case it's a simple class that then you pass in a simple text to then render out your HTML but what I want to do is I want to actually make this a little bit better let's actually put some real HTML back and return that as a response so we can move towards the logic of using Jango templates that will

**28:00** · drastically speed up this process for us as we start to get more and more complicated views and more and more complicated ways of rendering out our HTML Pages because that's what D jeno is all about we're going to constantly make more and more complicated pages to render out everything inside of jeno and from here on out we're just going to be building off of this concept really um and of course adding in databases and stuff like that but at the core this is what Jango does really really well

### Rending HTML Documents

**28:31** · now that we know how to route traffic to a specific function through the function itself and also the URL paths let's actually take a look at how we can render out closer to the correct format of HTML now if you know python but very little D Jango you know that you can open up files right inside of python so

**28:51** · let's go ahead and see how we do that inside of the CFE home here I'm just going to go ahead and do home.html this file I'm definitely going to delete in the near future but I just want to show you how you might approach this from a logic perspective as well as knowing a little bit about python so inside of an HTML document you usually have to declare the dock type of HTML

**29:11** · then you need to open up an HTML tag and you also need to close it then you're going to go ahead and open up a body tag also close it and then you open up a header tag also close it and we'll go ahead and say something like is this anything doesn't really matter what you write in here but what we see is closer to properly formatted HTML documents

**29:33** · this could be improved quite a bit but at the very least we have the H1 tag like we did before but now we've expanded a little bit to have better formatted HTML now web browsers are incredibly flexible and forgiving to errors with HTML because it's really easy to make a ton of errors with HTML so the web browser often makes up for that so the idea here is not to become an expert in HTML per se but to know how to actually turn this into a response

**30:02** · inside of D jeno now what I mean by a response of course is when we open up our web page we go to the homepage here and every time I request it if I refresh the page I'm requesting it that's quite literally doing a request D Jango is turning back and sending back a response you can actually see this in the terminal as well so we see that this is a get request and then it returns back a response in there also cool so good to know next what we want to do is we want to open up this HTML page and I want to put it right into this HTTP response in

**30:34** · other words I want my HTML to be well setting this string here now there is a d Jango way to do this which we'll see in a little bit but for now I want to just do it the python way which that means I'm going to import path lib and if you're not familiar with path lib what you can do is something like this dur is path li. path of this file then

**30:54** · we resolve that file like where it's located on our system and then we can go ahead and say parent this will give me that CFE home directory there which of course you could always print out if you wanted to see what that looks like now to get that home.html all I need to do within path lib is say my HTML file path

**31:14** · is equal to this slh home.html once again pathlib is great it's really nice that you can see this and we can actually change this HTML string into being from this file path and then something like a read text and

**31:29** · that will actually open up the file allow me to read it and then allow me to respond with the contents of that file so we can go and save that open up the terminal again make sure everything's running open up that web page we see that is this anything is now showing up we go back into our homepage we can see the printed out path is related to my

**31:49** · system but it will also be related to your system based off of how this is all done cool so the next thing of course is just changing this and saying this is anything or something along those lines and we can refresh on that page and it will work now there's a chance that the reason it's working is because of how Jingo refreshes things but realistically what's happening every time this page is viewed it opens up this HTML page and then returns back those responses or the result itself now

**32:18** · of course within python you could also think of this in terms of directly in line to python so you could always copy this HTML here and you could paste it in as a long string so triple quotes in there you can paste it in just like that and then not actually read that file at all but rather just have the document right in line there and then you can refresh it once again it's still the same thing so you could say something like in line is anything say that again refresh and there we go so it's showing us that I can now do all different things with HTML now while both of these

**32:51** · technically work right they both return HTML they aren't using what jangu does incredibly well which is allows you to extend the capabilities of what HTML does natively with something called the Django templating engine so let's take a look at how we can do that now which will help us shortcut this quite a bit so then when we think about our URLs and all of our view functions that go with it we can start to think in terms of

**33:17** · programmatically Designing these things so you don't have to do them one by one like you would with pure HTML right you'd have to actually build out individual HTML pages for all of that but instead we want to extend all of that with the jeno templating engine so let's take a look at that right

### Using Django Templates

**33:36** · now now we're going to take a look at the D Jango templating engine so we can see how our web pages can be more programmatic and realistically just more effective at rendering out data at sending HTML data to a user that's requesting it so it all comes down to string substitution and that in Python so what I'm going to do here is I'm going to go ahead and get rid of this print statement and just say something like my title equals to my page

**34:03** · something like that and then inside of the HTML document itself you might be aware that you could do string substitution now you could do something like an F string where you just put in my title like that and that will work or you could do something that's a little bit closer to how D Jango Works which is going to be something with in the realm of format now with format what you could do is then say something like my context equals to well we'll go ahead and do page title is equal to the my title as a

**34:34** · dictionary itself and then we want to change the HTML document here as page title and then we're just going to go ahead and unpack that dictionary itself into this format as you're aware what it would do then is say page title is equal to my title as an argument in here which

**34:52** · of course we could still put in just like that right but I'm putting it in as my context this dictionary on purpose as we'll see shortly but as we save that we will go ahead and take a look at that web page and there we go we got my page is anything that is the variable that's the the context that's being passed through and also the HTML document so right here we already have something that's going towards the actual

**35:17** · formatting of D Jango templating engine it's not exactly but it's definitely going that direction so what I want to do now is I'm going to go ahead and just copy this and paste below and I'm just going to go ahead and say my old homepage View and Implement my new one

**35:34** · so we go ahead and get rid of some of this right here and I'm going to go ahead and leave my title in there and I'll actually leave my context and then we'll just go ahead and say HTML is equal to just an empty string for the moment okay so now what we want to do is we want this to render out a document once again but we wanted to leverage the

**35:56** · same sort of string substitution that this document did so it needs to be an external document and it's going to be doing so leveraging the Jango templating engine so in order for this to work I'm going to go into my SRC folder here I'm going to make a new template folder and it's just going to be simply called templates I'm following convention here inside and next to the manage.py we see that there's that template folder in here I'll go ahead and do base.

**36:21** · HTML I'll leave it completely empty for the time being but we'll go ahead call it base. HTML remember that home.html that first one we were playing with is inside of CFE home that's temporarily in there it's going to be changing very soon so in order for the actual view itself this view right here to render a template the way we do that is by doing from D Jango Dosh shortcuts import render now this

**36:49** · render function actually exists in two places but using it at shortcuts is the convention that's what you'll see in most places as we will'll see later in this course but the idea being that we pass in render instead of HTTP response we pass in render we pass in the request itself we'll take a look as to why in a moment we pass in a template name so now instead of HTML we'll say HTML template and in this

**37:16** · case I'll call it home.html now I purposefully called it home.html as an attempt to load this page in so that HTML template I'll just go ahead and pass in right here that's all I'm doing so far that's it so we ronal render home.html so let's go and save everything keep in mind that I do have this templat folder here I'm going to go ahead and open it up and open up this web page and what we see is this

**37:41** · you know template does not exist error so this error occurred because well D Jango doesn't know about this template instead what D Jango did was looked in these places for the template these places are not exactly relevant to our project but rather to jeno at large notice it's in the virtual environment itself which will be true on your system as well so we need Jango to know about this new folder that I just created now

**38:09** · the way it knows about it is by going into settings.py inside of settings we will see that it's using path lib this is the reason I use path lib here was to get towards that point where we use path lib

**38:25** · and we open up a file or something similar to what we saw down here so back in the settings knowing that pathlib is used where is this base directory well of course you could always print out what that base directory is save the file refresh in there and what you'll end up seeing is exactly where that base directory is this base directory in my case is inside of the SRC folder which of course is where manage. high is and what do you know also where templates and CF home is that of course is on purpose and by desire so with this base

**38:55** · directory printed out and removed we're going to scroll all the way down keep going down to templates here inside of templates we have a lot of definitions that are definitely a little bit more advanced than what we need to worry about here but the one that we do need to worry about is this dur definition or this dur key with an empty list there so

**39:15** · we can pass in our directory to our templates folder or the path to our templates folder just like that so now we have a path to our templates folder so let's go ahead and open up that page again again once again it's still saying template does not exist now notice where it's actually trying out the different paths we've got a path directly to the

**39:36** · source folder into the templates folder into home.html looking over here there is no home.html in there there is one inside of CFE oh that though so what if we actually did that one well we could so let's go ahead and go back into baster we'll bring in baster the variable and then we'll do slash and CF home save it and then go ahead and open

**39:59** · this page up again and what we'll see is what do you know it actually rendered out well that's because D jeno is now able to look in those locations for the actual template that's being named here template name relative to the folder directory itself in other words if I said ABC slome Daddy shl and change that

**40:22** · as the template name what's going to end up happening is probably no surprise to you at this point hopefully that the template does not exist it simply just isn't there of course it's not there it's looking inside of a folder that does not exist called ABC so

**40:38** · that is how the directories are loaded now one of the things that's important though is we want to keep our templates nice and organized nice in one place so I'm actually going to remove home.html from CF home and bring it into templates here and just paste it in there right so there it is now it's inside of my templates so back in my settings I actually don't want this setting in here whatsoever I just want baster and templates this is convention this is what everyone else does in jeno so now

**41:06** · we've got that we've got home.html we're getting really close to being able to Leverage The D jeno templating engine there's a major concept that we'll talk about in the next part but the other one that we want to finish off with here has to do with the context the actual template variables themselves so what we had here in our old homepage view is we had this context that we passed in and we unpacked we can do something similar

**41:31** · inside of this render function we can actually pass in that same context as well once again having this page title this page title can be rendered inside of home.html using something called Curly brackets so two curly brackets now not one that's how the Jango templating engine works and then we give the actual key inside of the the actual dictionary itself so this value right here the key value to get the actual key value value

**42:01** · so we save that now we can go ahead and refresh again and oops we still have it at ABC slome so let's go back into our view here and change this back into just home save that refresh and there we go we've got my page once again fantastic so now going forward I can just use HTML

**42:21** · templates and it's really effective now you might think that this is actually not a whole lot better than this and generally I would probably agree with you because they're basically the same thing at this point however home.html I can do one new thing that I couldn't do before and that is something related to my request di user my you

**42:43** · know request. method I can do all sorts of things related to the request itself and I can refresh in here and now it's showing me stuff about the user about the method that was used to get this page which of course is G cuz it's just rendering things but now my template has a lot of things in here that well just simple string substitution does not have the ability to do another one being uh request. user. isauthenticated Hey are

**43:11** · they logged in or not something like that right we could save that in there and refresh and what do you know it says false so of course we can build off of this quite a bit and we will still see a lot more to this but there's one more aspect of the genu templating engine that we haven't covered yet and that is using basically templates as templates

**43:32** · should be made by leveraging little bits and pieces of other templates and extending how you can do some additional string substitution using just templates not context that will make a lot more sense once we actually start doing it let's take a look right

### Django Template Inheritance, Conditions, & Include

**43:49** · now now we're going to talk about D Jango template inheritance so what I want to do is take out home.html I'm going to make a new page just drop this in here just to let it sit for a little bit and then in home.html I'm just going to delete everything it's completely gone so base. html's empty home.html is

**44:06** · empty and I have a little reference to it right there so the idea here is we want to actually have the ability to not repeat ourselves so one of the things when it comes to writing out HTML documents all of them to be valid need doc type HTML all of them to be valid need HTML a lot of them most of them if not all of them need head and then

**44:29** · body and so we could obviously build on this quite a bit but the idea being every single page that we ever need to render needs all of these things so one of the things we could do in here as well is say title in something like SAS or SAS foundation and that's it so that's what we want right and then inside of base. HTML I'm going to go ahead and just say something like Hello World great so now how do I make sure that home.html uses base.

**44:53** · HTML and everything in it the way that's done is by using a special tag called extends so this tag itself is going to take in the name of the template it's looking to extend now at this point it's only copying everything in here it's not doing anything else so it's almost like it might as well be just base that HTML that's being rendered inside of my view which of course you could test that out if you wanted to but the idea here is as

**45:25** · soon as you want to start building out more pages you need to start thinking in terms of dry not repeating yourself over and over so we'll take a look at that in just a moment at this point home.html is rendering just based on HTML so if I save it and I open this up and then open up that web page I see it says hello world now one of the intuitions you might have is to go back into your view and use one of your context variables like page title inside of one of your templates so we'll just use it in base.

**45:54** · HTML for now and just go ahead and put page title in here we can save that and once again I can open it up and what do you know my page is working that actual template variable is now working so what we're seeing here is everything inside a view that is being used we grab that template and that actually passes it on into base.

**46:13** · HTML so all of the places that these variables might exist will be rendered out as they would as if it was in home.html it's quite literally extending everything but what if I wanted to add some content that's it's just in home.html something like you know I don't know hello again just like

**46:32** · that we save this I refresh in my page it doesn't show me anything it's showing me nothing new it should show me but it's not why is this happening well this is built into the D Jango templating engine once we do something like extends we need to make sure that inside of that template that is extending from there's a section that can be replaced the variables themselves are only one piece

**46:59** · it's it's easy to render out a variable anywhere right it's not so easy to render out well where our homepage is going to be what it should look like in other words we need to bring in something called a block so when we bring in a block here we want to open and close it but of course it's not just a generic block you actually have to name it something so we name it block content this is convention for the body we'll look at another Block in a moment but we've got block content and then in Block content just like that and so now

**47:32** · if I want this to be replaced all of the content in here to be replaced with something else first let's just put in some gibberish in there and then take a look at the page there's that gibberish if I want that gibberish gone and things more specific to the actual view it's on I could do that so this view right here home.html go into that template now we

**47:52** · can go ahead and put in hello again once again we declare that block once again we close out that block and then we need to use the actual variable that the block has named in this case it was content so we use block content and block content what do you know there we go so back into base what we should see is not this gibberish but something different so we look back at our web page and there it is hello again so we now did some substitution some dual substitution here just a little bit we used the variable where it can be used

**48:23** · and then we used this block content substitution let's take a look at this once again and this time I'm going to change it into the title tag here so what I'm going to do is I'm going to go ahead and go right around SAS and I'll go ahe and say block and I'll go ahead and call this head title and then I'll just put a in Block in here and once again head title just like that simple enough so

**48:50** · what I can do is I can copy this whole thing in here go back into home.html right above the content or really wherever I want to put it I can put in my head title here and I'll just call this homepage just like that we save it and so back into my browser notice it's called sass if I refresh in here it's now called homepage great so it worked

**49:10** · but it also didn't work it also didn't work the way I wanted it to the way I wanted it to happen is I actually wanted to keep SAS in there so the other part that's cool about this and how the templates work is I wouldn't actually need to go like this where it's I'm rewriting SAS again but rather I can just do block. super and it'll actually

**49:30** · take in what's originally in the extended templates block there and it will enrich it right in line just like that fantastic so that's template inheritance now there's a lot more that we can do than just this but what it allows us to do is really focus on any given area that we want to improve upon

**49:50** · so in the case of like our users authenticated right I could come in here and I could paste them in just like that right all of those things related to the user it's in there now or I could do something a little bit different and say well let's go ahead and do something like Snippets and then I'll go ahead and say welcome user message. HTML and all I want to do here is use another thing called a condition and I can say condition we'll talk about that in a second and then we'll do and if so what's the condition that we want to use I can use something like request. user.

**50:23** · isauthenticated and I can say you are a user I could also put an else clause in there and say you are not a user that simple so I've got a condition in here just like that we can also break it out if we want to and we can put the whole thing into a div just like that and now I have a

**50:49** · message that I might want to reuse in other places so back in home.html instead of putting this out here perhaps I just want to to say include the Snippets slw welcom user MSG do HTML just like that so we can save it

**51:08** · and then we can refresh and it says you are not a user so this showed you several things that are going on first off we have the ability to include other templates we can make those templates really really small we also have the ability to extend from another template to inherit everything that they've got going on except for the parts that we want to replace so this is like replace me right we also don't need to have any

**51:32** · variables in there if we want we could also have them and understand that when we use variables like this they can really extend throughout the pages that we're extending from right so in here maybe want to bring that one back in to the actual page here and what do you know I can use the

**51:50** · same concept right in here as well so there's a lot of different places on how we can use these templates and this inherit now you should play around with this because there's a lot to it but we will look at it more as we go forward now I did show you this condition because yes there's a lot more things we can do with our users we can do all sorts of control flow like this you don't necessarily have to do it in the template a lot of times the view itself will be good at doing the logic itself but it is nice to

**52:19** · know that our control flow can happen inside of templates like this right it's really nice that we can do all sorts of things for our users and what's going on with them especially related to whether or not they're authenticated which is also really nice so extending templates and using jle templates is something you will learn a lot more about as we go forward but these last two were made so you can have at least a foundation to build a lot of powerful things with just

**52:47** · some minor understanding of these Jango templates keep in mind there's a lot more advanced stuff to it one of those Advanced things that we didn't really talk about is where did this stuff come from well I'll give you a hint and you can always look into the code itself but it comes from the Jango settings the context processors you can actually build out your own context processors so every time a template is rendered it has a bunch of different variables that you can use every single time instead of

**53:14** · having it only on one single view but of course we want to have it on one single view as long as possible as long as until we really understand how to use all the things with jeno or if we really need to build out our own context processor which we will do at some point in this course so yeah that's D Jango templates once again there's more to it than just this but these are some of the fundamentals that we'll use so now it's time to actually move on to actually storing data into a

### Store and Retrieve Data Part 1

**53:42** · database now we're going to use D Jango to save and retrieve data and we do this through something called D Jango apps and more specifically the D Jango omm through models so we'll take a look at that in a moment but before we do let's go into settings.py and really just kind of discover what it is that I'm talking about so if we scroll down a little bit what you'll see is something called installed apps these are all of the components that make up your entire Jango project the term apps I think

**54:10** · might be a little confusing because you might think of apps on your phone where it's like an entire project these are smaller components that build up our entire project itself it's just called apps because it's been around for some time but the idea is out of the Gates jeno has some default apps one of them is the users right so all of the user login the user groups all sorts of things with that user sessions is in here as well the jeno admin is also in here so there's a lot of built-in applications that come in with jeno by default that make jeno well D jeno so

**54:43** · it's actually really nice so another thing about this is you could always look at the D jeno code for ideas and how you can improve your own apps of course there's a lot of code out there that also has apps that you can actually review as well but generally speaking is we want our own custom app here and more

**54:59** · generally as well if you create an app you just wanted to kind of do one thing pretty well as you see here there's a number of different apps in here one of them is related to users so it pretty much does users really well it doesn't handle messages it just does users another one's for sessions so the user sessions themselves again these are a little bit separated out how you define these apps I would just recommend make them as small as possible and grow them

**55:27** · only a little bit if they really need to be otherwise just create a new app because it keeps things nice and tight and focused because the real thing about Jango is you can import these apps wherever you need them and then you can store data or retrieve data wherever you need them so that's actually what we're going to be looking at here as well so the idea is we want to actually start our own app so how do we do that first

**55:49** · off we're going to go ahead and hit control C in a moment we're going to solve this error as well but a control C to stop the server and then run python manage.py hit enter we'll see all of the commands that we might need to use for our D Jango project in here now at this point what we're going to do is start app but then we will also do make migrations and migrate so let's go ahead and start the app itself so we'll run Python and then manage up high and we'll

**56:17** · just call it start app and you can call it whatever you like in my case I'm going to call it visits all I'm going to be doing is tracking visits to my website the entire website itself hit visits and that's it okay great so now I'm going to go ahead and close down this terminal and we're going to open up this new app called visits and inside of here we've got a number of different files that we can look at migrations is an empty folder but it won't be empty for long we've got admin.py

**56:44** · appsi models.py this is what we'll look at in a moment testy this is how we can actually test our code something that is becomes more and more important as your project gets more and complex and more people will come in and then we also have views up high hey what do you know just like we did before we actually made our own views so this start app function

**57:04** · doesn't actually do anything other than just build out some blank files for us that's it so keep that in mind when when you actually build out things you could always do this manually if you wanted to but what I want to do now is I want to Define my first model so inside of models up high I'll go ahead and do class and visit models.

**57:24** · model and visit is kind of a like a vague term so I'm just going to call it page visit and now I want to actually store some things in here so what is it that I want to store about the page visit well you could think about stuff like which user is visiting but we don't have users yet so we can't do that um we

**57:44** · might want to think about the actual web page they're visiting and we also might want to think about you know when they did it so those are the two components we'll really look at so the page or really the path that we want to use use which I'll do models. text field for this and then I'll do the timestamp as in when it happens and this is going to be models. time field or daytime field and it's going to be Auto now and add

**58:13** · being true okay I'll explain these in just a second now this is the column this is the column so this maps to a database table so it's going to be a DB table and then path is a column and time stamp is a column so when you add new data in here it's going to be rows so there's also an invisible column called ID and this is for this actually is the primary key and it's a auto field which

**58:46** · means that it's going to go 1 2 3 4 5 and so on until it runs out of numbers so go there for infinity and it does it automatically so the way you get these fields is in the actual Jango documentation so going into the Jango project into the documentation and you can search for the model fields in here

**59:11** · and model field reference will show you all of the different field types that you can use now these data types are really important for the database itself so it the database can be that much more effective and that fast it can be

**59:27** · optimized as you start to grow now the thing is if you end up using just a bunch of text fields and you don't actually refine things the way you should well then you're just not going to get the performance that you would want to have with your application so this is something you'll spend time with more and more as we go forward this is as basic as it gets right so what I'm also going to do is I'm going to add in null being true into my text field I'll

**59:54** · also go ahead and say blank equals to true as well to allow this to be completely empty and really just to monitor the page visits themselves now the way I'm doing this is not going to be efficient at all in the long run I probably wouldn't use this model this is really meant to highlight how all of this works using something that I think is fairly straightforward which is just a simple page visit okay so now we've

**1:00:20** · defined our model this is going to be a table and it's going to have three columns in it total because the ID column is hidden so we say hidden but it automatically comes through there path and then timestamp are going to be other ones as well path is really the only one we would ever need to set manually as we'll see in just a little bit so next up we're go into our settings and inside of installed apps here I want to go ahead and add in my new app which is simply visits notice I use plural plural

**1:00:52** · on purpose because the app itself handles more than one visit so I tend to name apps as plurals so I'll call this my apps this section here where these of course are D Jango apps right so my apps is now visits great so now how do we

**1:01:12** · actually make sure that this stores into the database how do we make sure that that table is even created and all that so as we get more advanced we'll look at this more but the idea is whenever you make changes to model .p you want to run python manage. py make migrations what

**1:01:32** · this is saying to your python code hey get ready to change the database that's all it's saying it didn't say change the database it said get ready to change the database now the nice thing about this is that we can track these changes over time that's actually a really key and important part that you want all OMS to

**1:01:53** · do whether it's D Jango or something else you absolutely want to track the changes that you're going to be making to your database tables in this case I'm just creating the actual model or the table itself and then notice it has three fields in here I said that there's an ID field it automatically generated it for us as well as the path and timestamp now you should never have to change these files they are there for reference and reference only but once you actually do run the make migrations then you can run something else called python manage.

**1:02:23** · P1 y migrate if I hit enter this actually did a bunch of things not just one so what we see here is it's applying visits.

**1:02:36** · 00001 initial hey what do you know that's the name of this file or this module but it's also applying all of these other changes these ones are all related to those built-in D Jango ones so now our database table is fully set up and ready to go so now if I were to run the server again what what we will see is no more error there was a red

**1:03:00** · error here for some time that is now gone but let's say for instance I wanted to start over with a new database altogether when it comes to this early phase of development I can just delete this db. SQ I 3 and well let's go ahead

**1:03:16** · and run the server again and now that error is back that errors is back because this new database that was just generated automatically doesn't know anything about the dat so let's go ahead and bring it in and run migrate all together and once again it runs those changes as well so this is actually really really nice this shows us that D Jango is doing its job and running all of the things related to SQL with this local database now this local database is defined by default in our settings under the database section we

**1:03:46** · will definitely re return to this and make it far more robust and ready for production this is not a production database although some people might use it in production I do not recommend it we'll talk about that more when we get into more advanced databases for now what I want to do is I actually just want to store a page visit how do I actually go about doing that well the easiest way to do it is to go into our CF home views into our homepage here we're going to go ahead and import that model so we'll go ahead and do from visits.

### Store and Retrieve Data Part 2

**1:04:19** · Models we're going to import the page visit inside of this homepage view I'm going to just do page visit visit.

**1:04:27** · object.create just like that that's it that's all I need to do so now let's go ahead and run it so python manage.py run server open it up refresh I'm going to

**1:04:42** · do it several times I'm refreshing a bunch even though you can't see it if you look at the terminal you can see that it was refreshed a bunch of times great now the important part is no errors happened the homepage was being rendered no err has happened that's a good sign for this itself so what I can do now is actually see how many pages I've created so the way I do this is I create something called a query set so I can do query set equals to page visit.

**1:05:10** · objects. all query set means well everything it's going to look for everything there's ways to narrow this down there's ways to do all sorts of querying into our database with Jango so all we are doing here is we're getting everything thing basically and I can put query set as page context just like that

**1:05:32** · with this page context I can go back into my homepage template and I can render that context out just like we did with other things in here with doing two curly brackets and that query set I can save it refresh now I can see all of these page objects notice that it says 14 refresh it again 15 refresh it again 16 so it's actually adding new data every time I visit the page as as you might imagine it's going to start getting really big so the query set itself will truncate these values it's not going to necessarily show them up for you uh which saves on how quickly

**1:06:06** · that data can be responded with that's a little bit more advanced so instead of showing the query set we'll just go ahead and do something like page visits and then instead of using query set here we will do something different so I'll get rid of that and I'll go ahead and say page visit and count so it's a new

**1:06:24** · variable that we don't have to find anywhere so of course if I refresh in here it doesn't show me anything but if I were to go back into my views here I can actually use this query set and do page visit count and just call a built-in function on query sets called count that will quite literally count up all of the rows in the database for those pages so now I can refresh in here and notice it is incrementing every single time I do it now the big question though is why did I have both of these

**1:06:56** · fields well this field right here is giving me a Tim stamp every time this is called save or create this right here creates a Tim stamp automatically for the rows the other one the path itself well I'm actually not storing that path I'm not actually storing it anywhere so in order for me to get the path I can actually grab it from the request so I can do request. path and we can print that out let's try that

**1:07:26** · and we'll go back into our page here open it up and there we go so what we've got is that slash right there right so that's the path so path and path once again refresh in here there we go there's that path so what I can do then is I can pass in here path equals to well request. path and that will now

**1:07:54** · store that request for US based off of that path now the reason for this is because then what you could do is you could actually filter down your query set so instead of getting everything we can actually just go ahead and say filter path equals to request. path we

**1:08:13** · save that now what's going to happen is the actual page visits is going to change slightly I hit a refresh and now it's at six that's because the first 60 odd ones did didn't have the path in it which is pretty nice so what I can also do then is I can say the Qs is usually what you'll see for query set and then we'll go ahead and do page Qs just like this right and then we can actually put in you know total

**1:08:45** · visit count and this is now going to take the total query set. count something like that we can save that and and then refresh on our page and let's go ahead and make sure that we put this into our template as well so we go and do page visits and we'll just put in some P tags here so it's separated out a

**1:09:08** · bit and we'll just go ahead and do our total visits so back into our views let's grab that total visit count here put that in save it and refresh on our page and there we go so those are incrementing so it might not be surprising then is that you can actually do some math right so you can do percent and say like our you know page qs. count let's do times 100.0 divid qs. count and

**1:09:40** · then you would get a percentage of some kind by putting these into parentheses and then you would be able to say the percent is equal to whatever that percent is and then we can refresh and we see that the percentage grows for

**1:09:56** · this particular page and once again we can actually you know do the same thing all over again for the about page or any other page that we want to but the point of this is to be able to store data and then retrieve it in this case I'm storing and retrieving in the exact same spot that might be what you want to do that also might not be what you want to do most of the time you're not going to do it this way but the point is is that we can actually see it in real time as to everything that's happening within the database now there are ways to make this more efficient in terms of querying

**1:10:28** · like the query sets themselves the pages and even the math that's in here a lot of this stuff we could actually do a lot more efficient things within the database itself but that's not something you'll need to worry about for some time instead we have a realistic way as to how we can track page views and more importantly how we can start storing data into the database now one of the things that we'll do in later parts of this course are related to the D Jango

**1:10:53** · admin so you can start seeing all of that data that's coming out in the D Jango admin itself we're not quite there yet we're really just at this point now what we want to do is move towards actually getting this thing as a real web page somewhere we have some data that we can store we have a way to actually see that data so now it's time to actually use the process of going into an actual production application which is actually pretty

### Push to GitHub via Git

**1:11:20** · exciting now we're going to go ahead and Implement git into our project this of course is so we have Version Control but more importantly so we can actually move our code around really easily and then push it into production as soon as possible now I have the philosophy is the sooner you get used to pushing in production the easier it's going to be for you to build on top of your application because there's nothing better than a good problem that's happening in production because you're going to learn a lot when that's the case and especially when you have users

**1:11:51** · so we want to use git for this and we're going to also use GitHub now the example I'm about to do will only exist in terms of this example if you actually want the actual code I'll end up using including when we go into production that will be on the courses repo itself so at this

**1:12:08** · point download git if you don't already have it downloaded actually VSS code might have downloaded it for you because it does have git built in to the project itself so there's a lot of things with VSS code you can use that just make it that much easier so in our case that's what we'll do is I'll go ahead and just initialize the repository right in vs code just like this and the folder that we're in once you do that you'll see a

**1:12:32** · ludicrous amount of code that's trying to be committed the reason for that has to do with venv here so one of the things you could do right out of the gates is you can put a dogit ignore file in here and you can quite literally put V andv and what that should do is it should remove the virtual environment from being committed in any form or fashion but unfortunately this actually doesn't cover all of the code we might want to ignore in terms of GitHub or

**1:13:01** · pushing this around so GitHub has something called a python get ignore which you could copy all of the raw file from which I do recommend you paste that in that's going to take some of the files away from it as well and then if you're on a Mac you might want to put dsor store on here as well just to make

**1:13:20** · sure that that's gone too now going forward the way you could use this is by literally using the git Source control inside of vs code and taking a look at all of the differences that are happening from the code itself as it changes over time so that that's actually what I want to do right now is just show you some of the basics of git granted this is not meant to be a comprehensive git course but rather enough git so you can get by pun intended with this course itself okay so

**1:13:50** · the first thing is I'm going to use the command line not vs code get status is one of your favorite tools that you'll ever have CU you can see what hasn't been tracked yet tracking means inside of the repo ready for get to check all of the changes that happen over time if you don't want to change to be tracked just throw it into get ignore as soon as you take it out of get ignore it can start tracking it so now we got get status I'll go ahead and do get add-- all and I'll do get commit DM and

**1:14:21** · then I'll go ahead and say Hello World MSG that's it so all I did here was I added all of the files to be tracked and then I added a message kind of like preparing it then we're ready to go and then we can actually push it but I don't have anywhere to push it yet so we need to configure that and the way we do that

**1:14:42** · is going into GitHub creating a new repository in here I'm just going to call this sess and R&amp;D sample I'm going to make it a private repo in here you can make it public you can make it private and I'll go ahead and say Hello World test you're going to go ahead and do none of these things because you're already have files

**1:15:06** · committed if you add any of these things you will probably run into issues trying to commit your project we'll go ahead and create this repository here and then I'll go ahead and grab this git remote at origin with all this data on here and

**1:15:22** · I'll paste it in and then I'll go ahead and run get push origin and Main or really what's ever over here it might say master if it's newer it's going to say main then I go ahead and run push now mine was successful yours might not be yours might need you to log into GitHub to actually do all of the setup for your git system that is outside the context

**1:15:48** · of this series but once you actually do push it into git you'll see something like this where it's your actual code code and in my case it's private it's not accessible by anyone now by the time you watch this it will be accessible on the SAS foundations course and I might even make a branch for it based off of this suggestion but that will be explained another time so the idea being

**1:16:12** · that now our code is on here we should be able to use services that will deploy from this code directly if we need to change things well we can really simply so I'm going to go ahead and just show you what you would do to make a change you go into your code let's say you want to go into CFE home into views now you want to go ahead and just change the ordering of something let's put the template right above context here and

**1:16:39** · then I'll cut this out and we'll save it modified there's a yellow there it's showing that it's modified if we go into Source control and I click on it I can actually see what's happening let me break this down a little bit I can see side by side what's happening on one hand on the right hand side we see that it's green that's showing that this was added on the left hand side it's showing red which means it's a subtracted it's really just comparing and contrasting the difference between the files so you can change it commit it

**1:17:10** · or not so I'm going to go ahead and say hey this is good to go now I could do it inside of the command line here or what you could do is right inside of vs code you can just review it go ahead and hit add and you go ahead and say updated uh views to change order or something like

**1:17:30** · that hit commit and then you can publish it or push it into GitHub and that's exactly what happened and so then you'll see that change message here you can click on it and you can see all of the changes that happened which are the same basically as vs code as to the changes themselves so I'm really not going to go over get much more than this unless there's a really specific reason for it like a specific deployment option maybe we need need a additional configuration for git itself or later maybe we'll do

**1:17:59** · some cicd stuff at this point we now want to deploy it into a service with the code as it stands right now it is definitely not production ready code but we're going to do it anyway let's take a

### Prepare for Production Environment

**1:18:15** · look now we want to start the process of deploying our sass Foundation project into a production environment now I wouldn't consider this a production ready project in the sense we don't actually want real users yet but we can still learn a lot from deploying it into a production environment and we can also start building the habit of continuously deploying and fixing bugs deploying and

**1:18:41** · so on so that's actually what we want to work towards the technology we're going to use for this is actually Docker containers now even if you don't know Docker or containers or the concept itself I'm going to give you the exact code you'll need to actually leverage the technology without really fully understand everything that's going on because Railway makes it really easy to

**1:19:02** · do that Railway is where we're going to deploy our application which will handle a lot of the container stuff for us in conjunction with this blog post that I have specifically for deploying Jango on Railway inside of this course now before we get to all of that I want to do some fixes with my code so let's go ahead and

**1:19:21** · jump into the code itself into settings.py now traditionally speaking when you go into production you do not want to have these things set in the way that they are you want to change the secret key you want it to be an environment variable and then you also want to change the debug to being false

**1:19:38** · that being said I'm going to keep them on because we are really just testing our production environment not so much of pushing this into production where other people can use it in the future in this course we will definitely change these things so the first thing that I needed to address is allowed hosts at this point what we've been doing is we've been running python manage.py run server this allows me to run D Jango on

**1:20:04** · this particular Host this is my Local Host right it's not a production host at all so this is one of the first things that we need to change to ensure that this project will work even in debug mode so the way this is going to work here is I'm actually going to put in railway. apppp what this allows for is something like htps SL SAS and then prod.

**1:20:30** · railway. apppp so it allows jeno to run on a domain like this using that dot in the front allows for all of these subdomains to be able to work correctly in lie of the Local Host domain but as soon as you start adding in allowed hosts your local development environment will also need those allowed hosts as well so inside here we'll do plus equal equals to the

**1:20:58** · 127.0.0.1 and then you also might put in something like Local Host in here as well so this debug flag will eventually be turned off and then the allowed host will need to be narrowed down to the actual hosts

**1:21:13** · that you want this jingle project to actually run on so now I'm going to go ahead and run it again and if I open this up I should see my page everything should be working fine and of course if I keep refreshing I see my page it's change so one more thing that I want to do prior to going into production would be actually going into my views here and changing my about page view change it to

**1:21:35** · Simply about View and then I'll also go ahead and copy and paste everything from the home view or the homepage View and paste it in here I realized there's maybe confusion about page visit of the model and the page view name those things aren't meant to be uh confusing at all but they are in there nonetheless now before I actually go any further one of the problems I do have with this is the percent that's going on within any

**1:22:01** · given function itself because as soon as you actually have some page views you can then divide by the count that's going on but if the count is zero then you run into some issues otherwise what that means is I'll just go ahead and say try and just do percent equals to uh

**1:22:20** · this right here otherwise the percent is going to be equal to zero and then we'll just go ahead and use that there we go so this is basically just handling some of the math issue that might come up with these items and so with this in mind the about View and

**1:22:42** · the homepage view are basically the same I'm going to change it to home View and then I'm going to get rid of all of this and just return the about view pass in the request pass in the ARs and pass in the keyword ARS in

**1:22:57** · other words it's just basically using another function within that function now I actually don't do this very often because it's kind of wonky logic but it can be done uh because that's how things work here now that I've got these two new views here I'm going to go into my URLs and just change them a little bit this is now going to be our home view home view home view I don't need all of those but I will keep them in and then I'll go ahead and say about and then we'll do our about view in here as well and then we just need to import it okay there we go so now with this in

**1:23:31** · mind with everything saved I'll go ahead and go open up my project here's my homepage View and then I'll go into my about view as well and I should be able to refresh in here and see all of the things related to about and then home and all that so what we should have in our about view is we should get a lot of different page visits specifically for about so the about percentage will go up

**1:23:56** · as I refreshed that's what I was doing right there just holding command R and now my homepage view has less right so I just want to see the changes between these two things that's it and for some reason I think I put a comma at the end of this I don't need that comma so we can get rid of that as well okay so at this point I'm now getting closer to being ready to go full production with this application I have set it up in a way that basically puts the groundwork

**1:24:23** · in so my URL should be accessible the settings should be ready for it as well so I'll go ahead and save everything and I'll go ahead and just bring it and push it into my git repo so I'll do git status I can see all the changes that are coming on in here and of course I can see those same things by going through in vs code and then I'll go into prepare for Railway or something along

**1:24:46** · those lines I'll commit say yes and then I'll go ahead and sync them and I'll say okay so syncing them just means that I'm pushing them in to my G repo which of course now I'm just using the SAS foundations repo going forward I'm not going to be using the other one so there is one other part that we need to configure in order to use Railway but I want to leave that for the next part I just wanted to make sure this part of D Jango was ready to go now I will say

**1:25:14** · that there is a good chance that we will need to make some changes again once we go into production but we'll wait until production to make those changes we will wait till we actually push it into Railway so let's go ahead and get started with

### Deploy Django to Railway with Docker Containers

**1:25:31** · that now we're going to deploy our SAS foundation's D Jango project to railway using Docker container technology now the idea here is we want to work off of the same code if you have different code the errors might be plentyful there might be a lot of them so if for some reason you decided to experiment a lot right now would be a good time to come back to what we've done and the way you could do that is by just downloading the code from the section one branch this is

**1:25:59** · the section one branch as to what it stands right now this is not going to change I did test it I wanted to make sure that this all worked so be sure to check out that section one branch to make sure that your code is also the same as mine now I in the video will actually be working off of the main branch so that's what you'll end up seeing so the first step that we need to do is we need to turn our D Jango project into a Docker container that is

**1:26:23** · docker containers just like this now these can be really really complicated or really really simple the way it's going to be simple is by me just giving you the docker file and really explaining at least at a high level as to what's going on with that Docker file so the way I did this by creating a blog post so if you see in the G repo there is a blog post that we have specifically for deploying jeno on Railway and this

**1:26:49** · course so if you scroll down a little bit what you'll see is the D Jango progenic setup we've done a lot of these things with the exception of adding gunicorn which we will in a moment and then we actually added Railway app into the allowed hosts and we talked about some of the main configuration files you might need to do with your full deployment but right now it's all about getting into that production environment altogether now what we need to do is create something called a Docker file the docker file is literally the instructions that Docker can use to

**1:27:19** · build the container now what's a container if you think of it as like a mini virtual machine you're on the right track on your local operating system what you did is you downloaded installed a version of python what this actual Docker file allows for is other versions of python if you wanted to change them the other part about this is then we created a virtual environment what do you know here is the

**1:27:42** · process of creating a virtual environment in that container application and if you go line by line You'll see all of the things that are happening to set up that container environment now the reason for this has to do with the python runtime I want to make sure that I can use Python 3.12 the way I do that is by actually having my own container to make this happen once I

**1:28:04** · actually do all the runtime related things including making a place to store our code copying over our requirements files copying over our code running into the installation then the container is built now at some point we might run collect static on here so we might actually change this I'll talk about that when that happens but the next part is actually configuring how we can run this and how we'll run it with gunicorn

**1:28:28** · so what gunicorn will do is this is the production version of python manage.py run server right so realistically in production you don't want python manage.py run server to run you don't want the development server you want a production server that's exactly what gunicorn does and what we're doing with this step is I'm making a bash script

**1:28:51** · that makes it really easy to run G unicorn based off of any arbitrary Port more on this in a little bit then I also want to make sure I'm running python manage.py migrate to make sure that my production database is ready for my container to

**1:29:07** · actually run this will become a lot more important in the future but you want to make sure that your production database has been migrated because well this might be the process or the place as to where it happens when this container ends up running there's a lot of different things that we can talk about there but for now we'll just go off of this container file itself so let's go ahead and copy it and we'll jump into our local project here and inside of the

**1:29:31** · root I'm going to go ahead and create Docker file and I'm going to paste this in here now I did mention that we are using gunicorn so I need to make sure that I have gunicorn in my requirements.txt I could also do something like this where I do pip install gunicorn right in line here

**1:29:47** · which might be a good idea depending on where you are with your application but I'm actually going to put it into requirements that txt so we'll go ahead and do that right here so gunicorn save it now we've got our Docker file ready we've got our requirements ready we are almost ready for Railway there is one more thing I'm going to add in that's railway. tml the reason I add this is so

**1:30:09** · that if I need to have other Docker files those of you who are a little bit more advanced with Docker files you can do that you can actually declare those things in railway. so I'm going to go ahead and jump back into that blog post and scroll all the way down to the way.

**1:30:24** · toml code and we're just going to go ahead and paste this in here so we see that we declare the Builder that we want which is going to be based off of Docker file the default I believe is their Nyx builds which is a lot like this but just slightly different so we declare the docker file itself and then we actually add in which path that we want to use so if you did have other Docker files like V2 or something like that you could then declare them as UC fit relative to this Railway file next the watch patterns this is basically saying hey Railway

**1:30:55** · watch if anything of these files changes then go ahead and do a build we'll explain that in just a second because we'll actually see it but the idea being that we want our source code all of the Django code whenever that changes we want to trigger a build if our requirements changes we want to trigger a build when we don't want to trigger a build is if like read me changes this

**1:31:15** · actual doesn't change anything about our application so we don't need to watch that pattern okay great so with this in mind I'm going to go ahead and clear this out and we will do get status we want to add everything which we can just do on the vs code as well and we'll say prepare for Railway and let's go ahead and commit that and we'll sync those changes and we'll go ahead and say okay so now we are ready to deploy this on Railway so back into this blog post if you scroll up you can always sign up for Railway

**1:31:46** · you can also sign up for it inside of the GitHub repo either way just go ahead and grab an account for Railway if you use rlink we just get a credit a referral credit just like you could as well but anyways Jo jump into Railway now I'm going to use GitHub so that it automatically authenticates with GitHub so that's what I'll always use with this one itself so I'll go ahead and authenticate this way this is not the same thing it's giving permission to our code it's just authentication that's it

**1:32:15** · now we can give permission to our code so go and add a new project we'll do deploy from GitHub repo we will configure the GitHub app notice that it shows me one thing this is not something I want to actually deploy at this point so I want to deploy a different one I'll select the account I'm using I'll go ahead and select specific repos you can

**1:32:34** · add all repos if you want in my case I just want to do specific repos this is actually really easy to change in the future I'll show you how to do it in a moment but I'm going to go ahead and do the SAS foundations one not the R&amp;D sample that we talked about before but just the SAS foundations and I'll go ahead and do all the read access install and authorize and make this thing happen now of course I'll go back to that deploy grab that repo I'm not going to

**1:32:57** · add environment variables at this time we'll do that later but right now what I'm going to do is just simply deploy this application so what's happening here is Railway is going to clone the code it's going to then build the container for us it's going to do that process automatically as we see here it's building the container now those of you who are familiar with Docker might be aware of the fact that you can build your container somewhere else Railway

**1:33:23** · does that all in line now in our case we gave it instructions to use our Docker file Railway has a way to do this without Docker files although I have a lot more success using Docker files that I design myself and luckily for you you get to use that same Docker file without thinking too much as to what's going on with it uh but what will end up happening is this will build everything related to the environment to ensure that it ends up working once it finishes

**1:33:48** · building then it will actually deploy the application itself so it does take a few minutes actually finish building and then get ready to deploying but what we see here in these deploy logs is starting G unicorn that's a great sign and then it's listening at well it's listening at Port 5561 that's what my port says your Port might be different that is exactly why

**1:34:12** · going back into the docker file itself if you scroll down that's why this port is kind of funny that's why it's based off of a default value or the environment value which is exactly what's happening here and that is all set from Railway you can't change the

**1:34:28** · port that's being run there which is actually a critical piece that would be easy to overlook if I didn't just hand you the docker file itself great so now that it's deployed and active which is a good sign this is only because all of my code has been changed and ready for all this I actually want to now see the actual URL how do I actually get to this how do I actually see it well there's no real clear way on how it's done here so

**1:34:53** · so let's go back into our settings here and what I want to scroll down to is the networking and basically I want to give public access to this at this point I only have private networking access which means I can actually deploy other applications that then could connect to this one but of course I'm not actually going to do that at this point we're just deploying our D Jango project so we do want it to be publicly accessible so let's go ahead and generate a domain for this as soon as I generate that domain

**1:35:22** · really really quickly I'll be be able to open it up and at some point this part will refresh and actually show my Jango project in here and it will actually end up working at least it hopefully will end up working in the very near future so I'm going to give it just a second to finish propagating before it ends up working okay so mine's taking a little bit of time so I'm actually going to just change something in here I'm going to go in my variables I'm going to go and add a new variable and I'm going to go ahead and say Django debug and I want

**1:35:48** · it to be equal to zero I'll go ahead and add this and right away I see that it says apply yly one change so all this is doing is wanting me to redeploy this application which is really nice so if you change something in relation to your environment variables it's going to redo everything those variables are available

**1:36:08** · at build time they're also available at runtime which makes it really really nice for doing all sorts of things that you might want to do at build time that's a little bit more advanced than you might want but the idea here is at some point we will need to actually handle Jango debug on our project this

**1:36:26** · will be that toggle that we could use inside of our settings on whether or not this is true or false realistically the default will probably be false and then we'll change it to True locally and that's it but the point is that we can actually add in these variables at any time we can also add in a new secret key as variables as well that is definitely something we'll end up doing but the idea here is showing you that in real time you can just quickly deploy changes

**1:36:54** · and it might take a minute or two but all of these things are happening right on the railway application now one other thing I want to point out is in settings. or the settings for Railway in my case at this time the actual domain is railway. apppp if for some reason that ever changes then you will need to update your allowed hosts as well this

**1:37:17** · would be a good time for that now that also might be another thing that you put in environment variables at some point as well because there are variables provided to you by Railway like this public domain one you could bring that into allow hosts as an environment variable as well so at this point we have a deployment I actually did a few of them but the idea being if I refresh here everything is at zero all of those things are happening at zero if I keep going it will add in all of the page

**1:37:44** · visits and of course I if I go to the homepage or about either one it will continuously add in those paid visits as you might expect but there's a big caveat and it's really obvious when you do another deployment so if we go into variables here and I just add in a new variable something like Jango version or

**1:38:03** · just some arbitrary variable that you might want to use we'll just go ahead and say Jango version 5 we go ah and add that notice that I have the option to deploy another instance of this so I can add in a bunch of variables right now and then go ahead and deploy a new change as soon as you run this deploy new change it's going to build the container and then it's going to run that container keep in mind those variables are available at runtime and

**1:38:27** · build time it's actually really nice but the idea being is it's building something out now what's going to happen what's going to happen to our application now you might not know this or you might not realize this but jeno by default will create a SQL light database for you if it does not exist

**1:38:45** · the other part is Docker containers are ephemeral they are quite literally designed to be destroyed the code itself is not destroyed because that exists on GitHub it's just the container that's being run that's destroyed and then recreated that's exactly why we see building and then deploying it builds a new container a new version of our code

**1:39:08** · and then it deploys it so that means it copies all the code it does all the installations all over again and then it actually has all of these changed variables and since Railway provides these variables at runtime the build process needs to happen all over again that's another reason it all happens at this one place so now that I have deployed a new version of it let's go and take a look once it is fully

**1:39:33** · available we're going to see something happen inside of my page here so it's not fully available yet it will take another second before it is fully available but the idea being that since containers are ephemeral the sqlite

**1:39:49** · database is not being added to GitHub as you could check on GitHub but you can also see that it's gray out here that is done by default you don't want to push a database onto your GitHub repo anyway but what's going to happen is that database will be deleted you'll see this on your page I refreshed long enough I get zeros all throughout this means the the database was completely deleted now we can also verify this inside a railway Itself by going into our uh metrics here

**1:40:20** · or into our deployments rather clicking on the the deployment logs going into build logs what we end up seeing is everything being built then into deployment logs we see all of the migrations being applied this is a good sign that the database is a fresh database we could test this same logic out locally by running python manage.py migrate here and we'll see that no changes have occurred that's because this database actually has all of those

**1:40:51** · changes but if I were to delete delete it and run migrate again I will see all of those migrations happening and this is a key part of the Emeral nature of containers they will delete all of the files that are generated at the time of runtime in this case this is all of the runtime stuff so that means our database itself goes away this is a huge issue that we definitely need to solve so we have two glaring issues we need to solve soon one of them is related to our

**1:41:23** · environment variables in the case of the secret key and debug the other one is related to the database those things will start to fix in section two one other part that we start needing to add in is how do we actually handle CSS

**1:41:39** · JavaScript images all of that sort of stuff on our D Jango project as well but the big glaring ones as it relates to Jango have to do with the environment variables and with a production ready database no surprise we will be doing that in the next section so stay

### The Hard Way to Manage Environment Variables

**1:42:00** · tuned now we're going to start the process of using environment variables to change how our Jango project ended up working luckily jeno has that debug setting that actually makes a big difference to see how things are changing so we'll start off with pure Python and then we'll start adopting something else called python decouple so let's take a look first off we'll do import OS and so OS what this allows me to do

**1:42:26** · is use the entire operating system that python has access to one of the things that it has access to is environment variables so you can do something like os. Environ doget and then some value like debug right and we can also just say or false so basically if the

**1:42:46** · environment variable is not set then we'll go ahead and say false but the question is what is a good environment variable here well it should be a Boolean value it should be true or false now one thing that you could do is one or zero those would also count for true

**1:43:02** · or false in terms of python and in terms of this jle project so what we can do here is we can just verify this so first off debug being debug so if we were to run this right now as just simply python manage.py run server what we see is debug saying false no surprise here we have a backup value for debug and so

**1:43:24** · that's what ends up happening it takes that backup value so now if we wanted to inject this environment variable we can use it in the actual terminal itself so we can say something like debug being true and then python manage.py run server and that's one way on how we can actually set these environment variables so in this case it says that it is true but is it the Boolean value of true so

**1:43:50** · what we can do is we can actually just use the type and then pass in debug here and then we'll go ahead and run this again now it's showing me that the type is a string that's because the Boolean value is just not happening it like by default the environment variables are not going to be turned into Boolean values we can turn them in there but

**1:44:09** · they are not by default that so one of the ways we could change this is by using Str Str and just set that equal to the string of true and we can even make that even better by putting it into lowercase and then setting that equal to the string of true and so we could do something along these lines instead of or true this would be false most of the time unless of course we set it and now which case if I run it I now see that it is a Boolean value so it's a proper debug configuration for Jango itself so

**1:44:41** · you might get away with doing something like this for a long time it actually could work with the secret key but the question starts to arise where do I actually set these values then like am I going to put a ton of values right before run server or am I going to expose those values inside of the terminal window itself so like if we were to do uh let's change this a little bit here I'm going to just cancel this out I'm going to go ahead and run export

**1:45:09** · let's call it now D Jango debug and I'll set this equal to true as well okay and so now in my environment variable I'll call it D Jango debug just to see if this is working correctly mostly so we list things out and we run python manage.py run server and hit enter and

**1:45:28** · once again it's still working right so if I change that export to something different like false and then run it again now it's giving me false it's again still working which is great so we now see how we can inject environment variables but the thing is I just put that environment variable in my entire environment which you may or may not want to do so if I Echo out D Jango debug I can see that it says false now

**1:45:53** · if you're on a Windows machine this process didn't work exactly like this but the concept is still there you can actually have these environment variables in your command line and just use them this is often how you might use them in production but that's not how we're going to use them we're going to use them differently I want a way to keep track of all my environment variables both locally and in production

**1:46:16** · so without actually having to read through all of the code for this OS andiron thing here so we need a much better way on how to do this but before I get there all I want to do is I want to check that this is actually working in production so I'm going to go ahead and add it and deploy it and go ahead and say added D Jango debug Environ VAR

**1:46:37** · commit sync those changes go ahead and go and then jump into our deployed application on Railway which we see is initializing right here so there we go it's going to go ahead and run and then we've got our variables in here for jeno debug if I take a look at this it's zero so this Boolean value is going to be false so we should see a false value for

**1:47:01** · D Jango debug once this finishes deploying which we'll take a look at once it is so my project finished deploying and what we see in the deploy logs we can see that print statement is coming out debug is false so that part

**1:47:17** · is looking correct and if I go into my application itself once again everything zeroed out in terms of the database if I were to go to a page not found this is now what I'm seeing it's no longer the D Jango admin debug kind of thing that's going on with the page it just shows me page not found so we're at least closer to what a production application should have yes these things

**1:47:40** · can be improved of course but the point is that this version of using environment variables is definitely the hard way so what we want to do is we want to move away from this and use a third-party tool to that will help us with these environment variables and help us cast them in a specific type as we'll see in just a

### dotenv and Python Decouple to Manage Environment Variables

**1:48:03** · moment when it comes to managing environment variables locally we typically use something called a EnV file so inside of the root of our repository here we're going to create EnV just like that this should work on Windows as well the same exact way but the idea is we have this file that will allow me to add various environment variables so in my case D Jango debug and we could say something like it's equal to true just like that not a whole

**1:48:32** · lot different than what we've already seen but basically changing the environment variable to being true on my local environment so how do I actually make sure that that that actual EMV file is being loaded and yes Dov just like that how is that actually being loaded into my Jango project that's the question that we need to answer and the way we do this is by using a tool called python decouple now loading EnV files is

**1:49:01** · incredibly common so what's going to happen over time is maybe EnV files become a part of python itself at this point it's not so we use something like python decouple now D Jango had a bunch of its own versions of loading in EnV files like Jango Dov there's also a python.

**1:49:20** · EnV now I really like using python D couple for a very good reason that we'll talk about in just a moment but in the meantime let's actually just load in this single environment variable with python D couple so inside of our requirements we'll go ahead and add in Python decouple here we'll save that and I'll exit out of this python here and then we'll go ahead and make sure we're in the root with Pip install dasr requirements and. txt hit enter and I already have

**1:49:49** · mine in there so it's already working so I'm going to go into the SRC function here and I'll run python manage.py run server okay so right now saying debug is false so let's go into our settings and that's of course because well the environment variable of D Jango debug is coming from OS Environ dogit so we need to change this to something different we need to use Python decouple so the way this is done is we're going to go ahead and set debug to something different I'll just say false for a moment I want to first off import we'll say from

**1:50:22** · couple we're going to import config this function itself will allow me to use environment variables so go ahead and say config and then the environment variable like debug itself let's go ahead and save it and we'll go ahead and see if that gives me anything notice that debug is coming in as false and the class is St it's coming in as string so

**1:50:44** · this is another reason why I really like using python decouple is because I can cast this as a Boolean value I can cast it as that data type as soon as I do notice that it still says false it's coming in as false now the other thing this has support for is that one or zero which we'll see in just a moment but the thing is this should actually be working but for some reason it's not so what is

**1:51:10** · that reason EnV is saying true let's change it to one let's see if that does anything that probably won't do anything for us either so this is actually highlighting what's actually really cool about python D couple and how it orders which environment variable it should take the environment variable it's taking is the export of D Jango debug if

**1:51:33** · I hit enter here or rather I should have said Echo I think it's going to be uh empty now so we can actually see uh that it says false okay so false is in there it's in the environment variable so let's go ahead and just close out the envir environment itself and then we'll go ahead and do Echo the D Jango debug again and we'll just go ahead and see what happens in this case it's empty now if you're on Windows obviously this part didn't work for you but overall the idea

**1:52:00** · is still there it's going to take the system environment variable as preference over a EnV file which is really great so we can go ahead and now run python manage.py run server now it's saying true I change it to zero and I run it again now it's saying false change it to one run it again now it's going to say true great so that's debug

**1:52:21** · now this also means that I can go to all of these other ones like the D Jango secret key which I would typically call D Jango secret key I would not leave it in as secret key because you might have other secret keys in there so we go ahead and do something like this and then I'll go ahead and grab this one and we'll put it into here as D Jango and

**1:52:42** · secret key set that in and there we go so we now have two different environment variables that are having a huge effect on Jango itself now what if I call secret key to for example and then I go to run this it's going to give me an error undefined value error Jango secret key is not found declare it as an environment variable or define a default value in other words we can go ahead and say default is none for example this

**1:53:11** · right here is a python decouple error so if I actually left config as default being none this is actually what I want to see right away I want it to tell me that there's an error with my J secret key this is a a major configuration item that we definitely want to have so if I accidentally deleted it I don't want my Jango project to run I want that deployment to fail right inside of

**1:53:35** · Railway when it goes to try and deploy it it will fail and then use the previous version that's already available so that's another reason to use Python e couples it it does not fail silently whereas if we were to use OS Environ instead so if it was OS Environ

**1:53:53** · on.it this itself would not fail the same way it would either be none or whatever that's why I actually had this setup in that way so again we'll stick with uh the actual config value itself and so now that it's actually set it's going to go ahead and run and of course we need to bring that Jango secret key into production but this would be a good time for you to test that theory out whether or not it will try to deploy this version now if it does deploy the version it's just going to be a bunch of errors and the pro won't end up working

**1:54:23** · so that's okay in the sense that it will still show you those errors the point here is just to have a better way of managing our environment variables and python decouple does that for us so at this time go ahead and deploy it push it into Railway make sure you add in your D Jango secret key to create a new D Jango secret key I actually have a whole blog post on this it's really just one command here that will actually generate a secret key for you they can run in an environment that has jeno itself so you

**1:54:52** · run something like that and you can just run it over and over and over again if you need to create new ones so it's just really that command like that you can also use something like open SSL and use Rand and then base 64 and then do something like 32 this is a valid secret key as well it could be used for D jeno also so you would just grab something like that you would then go into your Railway application into the variables you'll come in here and do something like Jango secret key and you'll paste that in add it and just do a new deploy

**1:55:25** · and then of course once you actually push the code changes then it will be you know change and make effect to everything now this is really important for users and all of that down the line so make sure that you do have a new secret key in there and it is secure you're probably not going to need to change it that often however you could change it like every month if you wanted to it does often validate invalidate a

**1:55:47** · number of things like sessions like the actual user session itself if you change your secret key I believe at least it used to it would actually end user sessions so they have to log in again so that might be something you don't want to do as far as persistence is concerned although there's probably ways around that as well but the general idea is now we have our a brand new secret key and a way to load these things in so it's time to move to the next part which is using a different database a actual production database because now we can actually have our database information not

**1:56:19** · exposed in git and it's also going to be in an environment variable both locally and also in production which is really important especially with our databases because that's going to hold well all of our data let's take a

### Provision a Serverless PostgreSQL Database with Neon

**1:56:36** · look now we're going to go ahead and Implement a postgres database into our D Jango project Jango and postgres have worked well together for years there's native Integrations that are going on that make it super seamless and easy to work with and use as you'll see in just a little bit without without much changes now the way I'm going to do this is by using neon neon is a managed

**1:56:57** · version of postgres it's leveraging that open- Source tool absolutely but they are doing all of the work for us they manage their servers and they also manage the database itself security fixes bug fixes all of those sorts of things are all handled by Neon now of course any good managed database service will do that the biggest difference about neon and so many others is the fact that neon is helping Pioneer the server aspect of postres this part is

**1:57:25** · actually fairly important if you're like me and you have a lot of project ideas and you don't want to spend a lot of money every month for your database to just sit there and do nothing so where serus comes in is it actually spins down to where the database is no longer running the actual database application is no longer running but the data is

**1:57:45** · still there it's still ready and it's still available for when you need it and then it'll spin up really really quickly like milliseconds and then it'll be ready for you and your application and your application's users really really quickly so for that reason we're going to be using neon and that's why I've partnered with them so many times is because it's a really effective way to use postres on so many different projects all right so go ahead and sign up for neon at this link right here so

**1:58:09** · that they know I sent you but the idea is once you actually do sign up you'll log into your account and you going go ahead and create a new project in my case I'm just going to call this SAS of course and I'm also going to use the latest version that's listed here the versions don't make that much of a difference with how you connect to it um it's about performance and security often times so use the latest version when you can in this case it's 16 and then the next part is the region now po

**1:58:38** · neon has a lot of different regions that are continuing to grow these regions should be as close to as possible to where you're deploying your application so whatever actual Reon region you want to use here is where you should deoy your application now part of the reason I deployed RS first before actually signing up for neon was one give you a practical look at how that's done and how quickly it can be done and then two

**1:59:02** · actually show you that if you're going to use something like Railway you want to know where the region is where you're going to be deploying first so go into your project go into settings and then scroll down and what you'll end up seeing is a actual location that it's deployed with that region so in this case it says Us West Oregon so if we want to actually lower the time it takes

**1:59:23** · to access your database the region for both where it's deployed where the actual codes deployed and your database make a big difference so we're going to go ahead and use organ as well so they're in the same region so the actual latency of the speech should be really really good now there are other regions and if you use something on the other side of the world it might slow down the performance of your application a little bit while the actual database will still be fast the actual time for it to get to your application and you know receive requests and stuff takes liter literally as long as um you know maybe going

**1:59:54** · around the world anyways so in this idea we now have the ability to create our project now we could go based off of this right here this connection string I'm going to show you what to do in just a moment so we will take a look at that but the idea being if you actually went into Railway and you wanted to use this database as soon as possible you could just add it into your variables and then you're good to go of course we still need to configure some stuff on D jeno

**2:00:20** · but that's how quickly you would be able to spin up in the future you just add it to one of these variables here now some of you might be tempted to just use their database templates that are in here and these are probably pretty good and they might be worth checking out but you're still pretty much managing that database even if it comes up really quickly the security updates the

**2:00:40** · potential security concerns the bugs all of those sorts of things aren't necessarily going to be updated using Railways now there might be caveats to that but I really like neon because then I can also deploy my applic in many different places but also the key feature the key clencher to me is how you can Branch the database so what

**2:00:59** · we can do here is I can quite literally take a snapshot copy of the database in its current state and make another version of it so this is actually really nice for local development it's really nice for staging our application as we'll see when we go forward but I just wanted to mention that now because some of you might have explored Railway and said hey there is already a postr offering in here that is available this

**2:01:22** · branching I don't know I don't think is available in there and this happens in seconds it's really cool as we'll see very very soon so now that we've got that out of the way we're going to go ahead and actually use this one with this connection string here so when you log in you got this dashboard there might be this quick start that you go through by all means you can go through that way as well I just want to show you the best way I know to actually get this going on D jeno so the first and

**2:01:45** · foremost part is of course the database you can always change the database name in here and if you do you'll see that come through on the connection string that we're going to end up using you can also add in new roles this is that security feature that postgress has you can have different roles and what they can have access to in your database now that gets a little too database specific here so I'm just going to go ahead and use the default values here and we're going to use the connection string I will say there is a Jango connection

**2:02:14** · like you know configuration item in here that is really good but it uses something different than what we did it uses EnV a different package alog together than our python D couple which is fine you could totally do that you can totally get away with doing something like that you can see that they also have the EnV file which you could also just copy this as well that's

**2:02:35** · not the route I'm going to go I prefer using the connection string because it's really easy to use and then I can also change it really really quickly that doesn't mean I can't change those other variables really quickly but this is just one variable that I got to worry about instead of a few so that's what we're going to go off of I'm going to copy this snippet here and I'm going to jump back into my Jango project into the EnV file here and I'll just do my database URL and I'll put that string in

**2:03:01** · there just like that so database URL is the common value you'll use in your jle project as well as many other projects too as we'll see once we integrate it into the jingle project so now that I actually have this set locally I can also put this in my production application as well on Railway I might as well since I have it here now using

**2:03:23** · just one variable is going to be a lot easier to switch out as we'll see in the future so that's another reason to do it now the jumping into our production application here into the variables we're going to go ahead and add in our database URL variable and then of course the database connection string itself so I'll go ahead and add that and I'll deploy a new version even though I'm not using this just yet so let's actually get to that process where it is integrated into our D Jango project

### Integrate PostgreSQL with Django

**2:03:54** · now we'll finally integrate our postres database with d Jango and the way we're going to do that is by using cyop G's binary package this one is also really useful in production so you want to use it for both you might be able to get away with just simply psychop G without the binary and this is version three so

**2:04:12** · older versions of Jango might have used version two I know I used it a lot now version 3 is available and it works really well so what we want to do then is inside of require requirements.txt here we're going to go ahead and add in the pyop G and then the binary version just like that of course if you don't want the binary version just leave that out and then I also want to bring in the DJ database URL uh this is for parsing

**2:04:37** · our database URL string the cyop G1 is far more important for this project in order for it to work now as soon as I see something like pyop G or any sort of python package that is there to connect to any sort of database I realize that my systems environment needs to make sure that it has all of the packages necessary to even use that package in

**2:05:01** · other words my Mac my current MAC might need additional installations to use this check the documentation if that's the case for you if it was the case for me I installed it a long time ago so that is important on your local machine but it's actually even more important in production so inside of this Docker file here if you scroll down to the OS dependencies we C1 for postres this would be true for MySQL Maria or many other databases your actual OS inside of

**2:05:29** · the docker file that mini virtual machine definitely needs to have the actual OS level libraries installed so that our python one can actually work so with that in mind let's go ahead and install these requirements here I'll navigate into the root of my project with our python DM pip install R requirements.txt of course you can just use pip install requ depart. txt as well either way uh but once you have these things installed we then need to use the DJ database URL inside of our settings

**2:06:01** · so inside of our settings we have the database configuration already of course that's in the main configuration folder and all that so what we want to do here is we want to get that database URL as you recall it's from config using python decouple we can go ahead and grab it and then cast it to like a string right so going into EnV we just need to make sure that that's actually in there now one of the things we could consider with this database URL is we could consider using a default of none the reason for that is

**2:06:31** · because maybe you still want your application to run even if for some reason the database URL is not there the application will still run it will just use the sqlite database so all of the data will be gone so like if you had users they would let you know that they can't access anything but this is at least a fallback that could allow it to run I actually don't want that fall back in this case I want to go ahead and get rid of it all together and we'll just keep that database URL but I will have

**2:06:59** · the condition in here as if you did have that fallback of none so we go ahead and say database URL is not none now we want to go ahead and just redefine the database configuration so if you think back to what we did inside of neon when we grabbed that database connection string there was the option for D Jango

**2:07:19** · and if you needed more advanced configuration for your postgres project and you know maybe the engine changes maybe you find a third- party engine that's better than the one that's built into D jeno which is probably unlikely but it certainly could happen if that's the case then you'd want to go with this configuration where all of the components are broken out what DJ

**2:07:41** · database URL does is basically ignore all this you could probably do some configuration for it uh but of course if you want that advanced configuration this is where it makes a lot of sense to do so and then of course instead of GE EnV you would still use config and all that and then you'd probably want to check that all those variables are available before you actually reconfigure the database URL itself okay so with this in mind I'm going to go ahead and get rid of this default configuration here and I'm just going to go ahead and import our DJ database URL

**2:08:11** · and then we'll just run the default which is d DJ database url. config and then the default being our database URL in here the default argument for the config that is as far as we really need to go but one other thing that we might want to do there's actually two things we want to do first off is just checking the health of our connection so the connection health checks being true we could say false we could toggle that and kind of figure out what we want to do there there's another one called connection max age and basically if you

**2:08:44** · want to ensure that your database connection lasts for a certain duration this is the argument that you're going to want to put in there now every once in a while you might want to see this as a actual environment variable so the way you're going to do this then is Con max age con max age is actually a data a

**2:09:03** · Jango setting that you can also have as well so you can quite literally put 30 here that may or may not have a big impact on the database URL itself I think it does but in case it doesn't we're going to Define it twice so we've got conax H here and then we're going to set it as an integer and then we're going to go ahead and have a default value here of 30 seconds and then I'll go ahead and connect those two things now I know neon's documentation has something related to this with jeno on

**2:09:31** · how you want to actually connect it so be sure to check that out if you are interested in more and how it relates to Neon specifically this is also because of serverless the serverless database will actually spin down so we want to make sure that we have adequate time with that connection to ensure that it doesn't spin down too quickly whenever we're doing something in our project that's kind of the point there all right so now let's go ahead and navigate into the SRC folder and run python manage.py migrate and of course

**2:09:59** · what we should see is it making changes to the database tables themselves and sure enough it is now I will say if you actually jump back into your neon console and wanted to go the direction of parsing all of this stuff out it's also really really easy so if you just copied it jump over into your settings here paste everything we don't need these Imports instead we just change get EnV to Simply config you could come through and do all of that and then of

**2:10:28** · course in your EnV you would want to build out all of those files I just want to show you that real quick because it's worth testing out on your own it's really simple based off of everything we've done great so now that it's done migrating let's go ahead and do python manage.py run server and just verify

**2:10:44** · that I can actually add items in here so of course it starts out with zero so I refresh several times on the homepage page and then I'll also refresh several times on the about page just so I have some data in here so that when I go into production I can at least verify that it's not all zeros but rather a certain

**2:11:02** · number of actual visits that are coming through because this is going to be the exact same database we'll use when we go and bring it into production which you could absolutely do right now if you're ready in other words just go ahead and commit it and then push it into production and verify that's something we'll do here in just a moment

### Neon in Production + Database Branching

**2:11:25** · all right so I did push this into production and I just want to see if it ended up working first off here is the local version that I will keep open then of course on Railway I just want to verify the deployment did happen and of course if you look at the deployment there it is and it is running if there were any issues with it go ahead and check out the logs themselves into the deploy logs this would end up showing you some related issues that are going on before we set up other things to

**2:11:53** · diagnose the issues that might be happening inside of your Jango project in production so at this point it is now working and it's working just fine so on our production app here's what we see on our local app if it were to refresh obviously it increments a little bit but it's basically the exact same well it is the same because the data is the same so what I want to show you now is a way to make sure that it's not necessarily the same really simply by using neon

**2:12:20** · branches is so inside of neon we can go in here and create a brand new Branch here and I'll just call this the dev Branch notice that I can change how I Branch it or where this might not be that clear until you actually do a branch branching means that it's take a

**2:12:37** · duplicate of your database and making a new version of it so I'll go ahead and create this now now I've got this new Branch I can scroll up to the connection string this is a new connection string so I'm going to go ahead and copy it and I'll bring it into myv here here I'm going to go ahead and comment out this first one the production one and we'll

**2:12:55** · just go ahead and put a hashtag in front of it and then we'll do database URL again pasting in our new one so of course if you were to select it you can see that they are not the same normally if they're the same it'll highlight it all across the board within our you know vs code instance here so now that it is not the same what I typically do when I change my EnV file is I actually delete

**2:13:19** · that terminal and start a brand new one just to make sure that it's all working correctly and everything all the cache and all that is flushed out so I'm going to go ahead and run the server now and there we go so here's our server running so if I were to open this what I should see is the original state of it right so

**2:13:36** · it's not a new database it's the same database it's starting from the same point but if you think of it in terms of branching like code it's taking just just a point in time and splitting off now I actually have two versions of my database one is this branched version with 27 page visits the other one is going to be my production version which we can see with the URL here this one has 22 visits

**2:14:03** · right so it's the same data it's just slightly different now the nice thing about this is then I can go into the neon console and say okay I made a bunch of changes to my Branch here I can actually delete this Branch at anytime if I see fit so going into branches here you can come in and just delete that branch and you're done so that dead branch is no longer there it's no longer available so we can go ahead and create another one and create that new Branch

**2:14:29** · this is now going to go based off of that original Branch the first one the production one it's no longer going to have 32 page visits as we'll see in a moment but it will have the new value whatever that ends up being so that new value will now put back in here at that database URL I'm going to close it out and again new terminal in here we'll navigate into SRC python manage.py run server hit enter I don't have to migrate I don't have to do any of that now I refresh in here and now it's back at 24 uh which should actually be just

**2:15:01** · like my production app or roughly speaking just like my production app as we see there so this might seem like it's incredibly simplistic but as your project grows into a lot of complexity this is really really nice so in my case

**2:15:19** · I have a Dev branch which may be what you want maybe you do want to have a Dev Branch or maybe you just want to have a you know preview Branch like you're coming in here and you go ahead and do preview and once again you're coming from the main branch or maybe you're coming from the dev Branch it's going to be completely up to you so as soon as you create this Branch you can then deploy another version of your application with this particular

**2:15:43** · database and then you can actually allow other people to see it interact with it and it's not going to T touch your production data at all all now of course you could always create a brand new project and do all of those same things so it's quite literally a different database but the nice thing here is these branches we can use them we can use many of them at any given time so we can really stage out our application as we see fit so I'm going to go ahead and get rid of this preview branch and just have my main and Dev branch in here the

**2:16:12** · other thing that's nice about this is if as your project gets more and more complex you can start testing out your migrations and making sure that they're working and ready with your basically production ready database it's just not the production one yet once you get all that sorted out then you could promote your branch whether it's your git Branch or even your uh Dev branch that you're using on neon you can do all of those things there a lot of great testing you can have in here with this the point and

**2:16:42** · time part of the brand chain is also super nice so in the case of this particular app it's sort of like an analytics app right this Analytics app at this point we don't actually want to adjust these page visits that's giving us false confidence or false numbers that are coming through that just simply shouldn't be there but we might also

**2:17:02** · want to do additional analysis on this so that's the other thing about SAS in general is maybe you're going to want to do a lot of analysis on your database doing a branch of the database will be a great place to do that analysis not on the production database itself and it happens in seconds but both of those things are great and a really nice feature of neon and get another reason to work with the neon service itself so

**2:17:28** · now that we've got this it's actually time to start building out more of the features we want in our production application so feel free to play around with branching as much as you'd like and do keep in mind in my case I actually deleted my database several times before I actually used it here so before we got to this point I deleted it several times cuz I was just testing a bunch of stuff off video video and then I got to the point where I can now use it as we have

**2:17:55** · seen which is incredibly fast so you can come in here and delete this database and start all over again and see exactly what I mean by that it's pretty cool let's keep going all right so now that we have the Baseline backend functionality in place that is we have it deployed we have a production ready database it's time to look at the front end and actually sty

### Styling with CDN for TailwindCSS and Flowbite

**2:18:21** · it quite a bit better and handle how we're going to do our static files at first so this means I'm going to go ahead and Implement Tailwind CSS now you can absolutely Implement Tailwind directly and learn all about it or you can do a bunch of copying and pasting and leveraging flow bite flow bite is a great library that is built on top of Tailwind that makes it really easy to just copy and paste some of their components so you can have a professional looking app with practically very little work and maybe

**2:18:50** · very little understanding of Tailwind itself it reminds me a lot of bootstrap which isn't based off of Tailwind but it has some of the elements of that that I liked about bootstrap that's what flow bite has so we actually want to implement this on our local page now the way we're going to implement this is very very basic to start out then we'll go ahead and add on to it as we go forward so the first thing is actually using flowes CDN content delivery

**2:19:18** · Network now the reason we're doing it this way is so we we can see incrementally how we might want to improve it and work on our local site that's what this section's all about so going into flowy atlow by.com you're going to want to navigate into the docs and then go into Quick Start and then go to include via CDN just the content

**2:19:38** · delivery Network the reason we're going this route is because it's already made for us it's already built for us if you're a little bit more advanced and you know how to do all of the JavaScript side of things you totally can at some point we'll probably get to here but for now for the vast majority of us we're going to stick with the CDN and the already built versions of both full bite and Tailwind so in this case I'm going to go ahead and copy and copy and go through the actual setup process that it says but let's go ahead and copy the CSS and we'll open up our base.

**2:20:09** · HTML inside a head here we'll go ahead and paste in that CSS link then we'll go ahead and grab the JavaScript link as well and put it right before the closing body tag just like that so once I save this and I go ahead and look at my Jango project and refresh in here what I'll see is all of the browser styling is gone so the

**2:20:32** · thing that's really nice about Tailwind is it removes all of the default styling that your project might have in other words you actually have to add a class for everything that's for paragraph text that's for titles everything needs a

**2:20:48** · class itself in order for it to work as you can see you could just try out some of these classes just grab them and then go into your homepage here and just add them in so if you did class equals to you know all of that stuff that's in the documentation you could then refresh your page and you'll see slight variations as to what happens right so these variations are something I'm not going to talk about right now but rather I'm going to talk about how we want to configure our actual CSS and JavaScript in the long run so in the short run this is probably fine just using base.

**2:21:21** · HTML in the long run we might have a lot more CSS we might have a lot more JavaScript so what we want to do is have a dedicated template for that so inside of my templates here I'm going to create something called Bas and then inside of that I'll go ahead and do Bas js. HTML and then also css.

**2:21:41** · HTML now something else you might have in here is like meta HTML all of the related meta items that you might need to put in your standard document here I'm going to ignore that for now and really just focus on a couple things but the idea being that our base. HTML file that Bas template file should have very few things in here it should really only have the things that are necessary in terms of the D Jango templating engine so I'm going to go ahead and cut this out here and I'm going to bring it into base.

**2:22:12** · HTML once it's in there I'll go back into base.

**2:22:17** · HTML and include the base / css. HTML the new location for that CSS and I want to do that same thing for JavaScript so I go ahead and bring this in and paste it in here and then I'll go ahead and do that include tag once again and do something like that great so the big reason for this is so that when I actually do need to do some changes to

**2:22:42** · anything related to CSS or anything related to JavaScript those changes will be made in the respective files that there are that allows my base. HTML to be very very narrow very very specific to all of the things that we need to do this becomes really important as your project grows in complexity but also it makes it easier to just see these changes inside of git right so inside of

**2:23:09** · your version control so for example in my Js here I've got a version of flowy that I might want to change and I can change it to one right I can just simply change it just like that and then get would show those changes over time whereas if you didn't in based. HTML those changes would still be tracked but they might be tracked with other changes you might make to base.

**2:23:28** · HTML this just makes me allows me to just go directly in and see what those changes are now there are things that I will adjust with this in the future so the git part is only one small aspect of it what's more important is the fact that I'm keeping things very very narrow in the terms of my templates and my templating engines all across the board more okay so now that we've got the styling done with our CSS let's just take a look at one simple

**2:23:56** · thing that we would do within flowy and that is a nav bar so if you do a quick search for nav and you get nav bars in here you can go ahead and come in and here is a nav bar right so it's got a nav bar with some drop down I'm just going to goe and copy this first one in here and I'll go into my templates and then create a new folder called nav inside of here we'll call it nav bar HTML and then I'm going to go ahead and paste in the navb bar. HTML great so simple now in base.

**2:24:27** · HTML if I want my Navar on all pages this where I would go ahead and include it and that's what I'll actually do for now I'll go ahead and say include navnav bar. HTML and then we'll go ahead and save that and make sure that our project still running go back into our local project do a quick refresh and there's that nav bar that is responsive so I can actually see

**2:24:52** · that it's responsive and it should be working at this point so of course we're going to improve this quite a bit going forward but what I want to do is I want to take the next step and not use the CDN anymore now the CDN is great for short-term usage in the long run we

**2:25:10** · don't want to use CDN because we want to manage these files ourself so that they're not actually subject to potential third party vulnerabilities with using somebody else's CDN this is unlikely to happen but it is something

**2:25:25** · that we should consider so it's something we're going to do from the get-go and it's not really that complicated plus as it teaches a number of things related to D Jango and how to manage and automate pulling your different files and also surveying your different files so let's see how we can do that in the next

### Configure Django Static Files in Dev

**2:25:45** · parts now we're going to configure jeno to start managing our static files this will set the foundation for what we might want to do in the future with our own content delivery Network or more robust ways to manage all kinds of static files including file uploads now in the short term we're not doing any of that we're doing the absolute basics of managing static files inside of D jeno

**2:26:08** · now the reason for this is to start moving away from using thirdparty cdns we want to control the content delivery Network ourselves but also if I ever need to customize my CSS and have my own CSS files that's something I will want the foundation of and the foundation for so that's something to keep in mind as we do this as well so in this case I'm actually going to go ahead and take flow byes CSS as well as JavaScript and I

**2:26:33** · want to bring them locally so the way I'm going to do that is by creating a folder inside of my project called Static files this folder is going to be the source of the static files that Jango manages it's not going to be the destination the destination is something we'll configure as well but the source is really like our custom CSS if we wanted jeno to manage it then it would

**2:26:57** · be our custom CSS if it's vendors then it will be our vendors so in our case we'll have it as our vendors so I'll go ahead and create a folder in there for vendors and then I want to actually bring in the CSS file that's in there so I'll go ahead and open it up there it is I can actually go in and do file save page as and notice that it is a CSS file

**2:27:18** · and I'm going to just navigate into my project here that I have it stored on my local machine into that static files into vendors and just go ahead and hit save great so I want to repeat this process with well my JavaScript so let's go into Bas js. HTML and then I'll go ahead and grab it and we'll open up that page and once again file uh save page

**2:27:41** · as and we'll go ahead and bring it into our project here great so now it's in a location called Static files vendors both of those things are specific to this project while jeno might have a regular usage of the folder static files it's not configured by default it's very similar to like what we did with templates we had to actually Define that in the settings so if you go into settings. high of your configuration you'll see that there's a really good how-to guide on using jeno static files

**2:28:12** · and we're going to do some of these things right now and then we'll actually prepare it for production once we get there uh right now it's all about development mode though and a big part of the reason for that is how big these files actually are they are massive whenever you see a massive file you want to probably not want to commit it into

**2:28:33** · your Version Control in fact both of these files are probably bigger than all of my code combined at this point at least maybe in the long run it won't be but the other thing is vendor files like this should be downloaded similar to like when we're downloading our vendor requirements our pip require requirments we don't actually have all of those requirements in our code although it is in the virtual environment we don't keep them in git right that's something we want to avoid so in other words we want to actually add the vendor folder here

**2:29:03** · I'm going to copy this relative path I'm going to add it into my get ignore so I'll paste it in here and we'll say ignore vendor static files or not vendor but vendor okay just like that so now we've updated our G ignore and these things get grayed out no longer to be really used okay so the question then is how do we actually reference these files inside of our CSS and JavaScript now if

**2:29:30** · you come from the JavaScript world you might be used to doing something like actually you know something like let's grab the relative path for that JavaScript you might be used to doing something like this this exactly does not work inside of D Jango it's not how it works for a number of reasons one of them Jango itself can actually push your static files to a production CDM system

**2:29:53** · and work based off of that so that's something you'll probably want to work towards in the future so you can have file uploads as well um as well as a number of other advantages of having your own content delivery network but we don't have that just yet instead what we have is the static files here locally so

**2:30:10** · jeno needs to understand not only where these static files exist currently but also where we want to store them at least temporarily so that's what we're going to look at now first off we declare this vendor directory here as well as the static files directory which we'll do now so the first one is going to be our static files we'll call this our static files base dur and this is going to take the base directory and then go into static files this of course

**2:30:39** · should resemble to you the exact same thing we did with our template engine up here right but it's just slightly different configuration because static files are slightly different than templates so the next part is something that I like to do which is our static files vendor dur and maybe we should

**2:30:59** · spell things correctly all across the board but we got our static files vendor dur which will be our static files baster SL vendors this will become useful way more useful later not so much right now but the idea being that we have now two configurations in here so let's go ahead and let Jango know about the source for

**2:31:22** · python manage.py collect static this management command as we'll see in a moment as well so this Source or all of the sources we want Jango to know about okay so the source is are going to be our static files dur okay and we want to bring in just simply That Base dur we don't need the vendor dur because it's inside of that base dur but there's our static files dur we can add more we see fit but for

**2:31:51** · now these are the directories that D Jango will know about when it wants to run python manage.py collecte so the same idea is going to be our output for python manage.py collect static in other words our local CDN

**2:32:09** · longterm it's going to be our prod CDN but for now it's not our production CDN it's just our local CDN and this is called our static root now the way we're going to do this one is going to be our baster. parent SL local CDN just like

**2:32:27** · that great so with this in mind if I close these things down everything should be configured correctly so let's go ahead and jump into the SRC folder and then I'm going to just run python manage.py collect static now before I

**2:32:43** · hit enter I want you to think through the logic of what's Happening Here with me first off the source this is basically t saying hey Jango look in this folder for all possible files that are static files that are are going to be needed then later it's going to be hey Jango when you need to load those files this is where you're going to look so if I run collect static that means that I'm actually copying those files over to this folder location and once

**2:33:10** · again I see that there's more than just the vendor files those are in there too so they're duplicated but also the D Jango admin files are in there as well something we haven't tou on just yet but the local CDN does have both of those things so once again we're going to want to make sure that we ignore those as well so I'm going to come in here and say well just simply our local CDN and we're going to go ahead and say and ignore the local static file root local CDN or you

**2:33:43** · know our local content delivery Network great so now we've got two things that are fairly important for this when we go in production this local CDN might not be something we end up using the other thing is since we are using a Docker file the way we do this we also might want to change this to just simply base directory it's really up to you on how you actually end up using the local CDN in the long run so maybe in production

**2:34:11** · we can go ahead and say something like this where it's if debug if not debug then we are going to go go ahead and change where that location is from the parent location to a different one and we can call this something like prod CDN this is completely optional but the

**2:34:32** · idea being once we do push it in production we might need to change this location or at least test where this location would end up being so in the short run I'll just leave it as this we'll save that and then I'll go ahead and run that collect static again notice that new folder did pop up and that local CDN is sh showing up once again now in my get ignore I just added local CDN and so no matter where I end up putting it it's going to ignore it and get ignore which means I can also just delete it at any time as well great so

**2:35:03** · now that we have a place to store our static files the source of our locally managed static files and a place where we can push them we can now start to use them so instead of base. HTML here instead of using this we're we're going to go ahead and use the built-in D Jango template tag called load static this allows me to do something similar to what we've got here but instead of this we use the static tag and then we can pass in the path as

**2:35:35** · to where it's located just like that and we can do the same process in our JS so go ahead and bring it in and once again we'll go ahead and do static and vendors JS there we go let's save everything and

**2:35:55** · let's go ahead and run our server at least make sure our server is running so python manage.py run server and let's go back into our page we'll refresh in here and I'll just go and inspect the element and mostly to see the source code here we see that the static files linked correctly on both of them and of course we can open these up into a new tab and it shows the URL for

**2:36:20** · my Local Host with all of that data right and so coming back into our CSS that is what's happening here so this tag what's going on with it what you might be wondering is it's actually going based off of the root that we have set up so similar to like our templates if we look back at our source here we've got our static file here this is the root folder it's looking for so when we

**2:36:49** · reference any of those files it's going to be relative to that Ruth folder so flowy men. CSS is in the vendor flow bite men CSS folder so that's why we actually use it like this very similar to the templates right in base. HTML it looks for navnav bar because it's in the nav folder and templates is the base so

**2:37:10** · we just need to keep that in mind when we're referencing these files it is not going to just be simply vendors and especially because I use that as the root itself now you could try it out with other configurations and other settings but overall the built-in static loader that Jango has we'll use whether

**2:37:29** · it's on the local environment like what we have here or if we have a production environment where it's going to a ver a CDN our own CDN that we manage this will also work with that as well so it just is a simple change inside of our settings that would end up doing all of that so where we leave it at this point

**2:37:49** · is none of this is going to work when we go into production the reason it's not going to work is because those vendor files will just simply not be there so instead of our Docker file I do have this thing called collect static in here but well it's not going to collect anything because those files will not be available because none of them are going to be sent to git which we can verify as well so if I close this out and do git status get add-- all get commit and prepare static files and then get push

**2:38:20** · we can actually look into our repo itself and we can see that inside of SRC here we don't have that static file folder even though we've got the commit coming through of prepare static files that static file folder is just simply not there so that doesn't necessarily mean that the deployment will fail it'll

**2:38:40** · just mean once it is deployed it won't have any of the styles that we just set up that is definitely something we need to fix and we're going to use something called White Noise to do it but before we get to White Noise We need a way to automate downloading all of those vendor files that's something we'll do

### Download Url to Local File Helper Function

**2:39:00** · first now we're going to create a helper function to download any file from the internet to a local location now I'm having this being fairly General so that in the future if I needed to download files I could just reuse this utility function as I see fit so inside of SRC

**2:39:18** · here I'm going to go ahead and create a new folder I'm going to call it helpers I now use this helpers module to build functions like this as well as many others but inside of helpers I'm going to go ahead and create a new file in here and I'm just going to go ahead and call it downloader dopy now you could probably

**2:39:35** · call it all sorts of things but I'm just going to leave it in as downloader and it really takes in two primary requirements first off is the request library and then the built-in python path lib Library we're just going to go ahead and import path now request since I'm using this here I want to actually add it into my requirements there's a really good chance that one of these other packages already uses python requests but since I am definitely using

**2:40:01** · it here I want to make sure it's in my requirements so that that that it's always going to be used and so what I want to do here is I'm going to define a function called download to local what this means is I'm going to go ahead and grab a URL that's for basically what the

**2:40:17** · download part stands for the next one is going to be our outpath this is going to be a path lib instance so what I'm doing here is just really declaring the data type that it should be in order for this to work correctly and I'll just go ahead and run pass now the idea behind this is

**2:40:33** · so that I can pass in a URL and it's going to download to my local files this will also work inside of a container element itself and of course this is going to be done when we actually go ahead and build the container through our Docker file that's kind of the point but to start out we don't want to necessarily have it work there we just want to work in general so to do this the first step that I want to do is I want to check that this out path is actually an instance so if it's not is instance of the Python path lib then

**2:41:04** · we're going to go ahead and raise a value error just like that and then you can pass in whatever message You' like in my case I'm just going to go ahead and copy and paste a simple message saying that it needs to be a valid path li. path object next up what I want to do is the outpath itself will probably have the file name on it this is realistically more of the destination path so the

**2:41:27** · destination outpath is more of how you might want to think of it but I'm just going to call it outpath because I wanted to just be fairly flexible here on how you end up doing it and so what I'll also add in is the argument of parent make dur and this is going to be a Boolean value and I'm just going to set the default to being true in other words basically I'll say if parent M dur then I'll go ahead and do the outpath dop parent which this of course is built into python path lib then you can

**2:41:56** · actually do make dur and then I'll go ahead and say parents being true and exists okay being true all this is saying is making sure that wherever the destination is that actual Parent Directory will end up existing which will most likely be true you could always add in these arguments in here as well if you needed to but in my case I'm just going to leave it as that that's pretty much it for the setup process of

**2:42:20** · the path lib just to make sure that the destination will exist for this to be downloaded next one I'm going to do is just a fairly straightforward request response from python request so I'll just copy and paste this one but the idea being we go ahead and request with a get request to that URL then if there's any issue it's going to raise an exception otherwise it'll go ahead and

**2:42:44** · return back the bytes and it'll say true or false that's it so that's going to be our download itself so in my case it says I could not resolve it so in my project I actually don't have python requests on here so let's make sure we do with our pip install R requirements.txt

**2:43:01** · and there we go so now it's in there and everything's all good so all we need to do now is just convert this into a management command that makes sense for what we're trying to accomplish which of course would be downloading at least these two files if not many others

### Custom Django Management Command to Pull Vendor Files

**2:43:20** · now we're going to go ahead and create our custom D Jango management command that is going to be very similar to python manage.py collect static but it's going to happen right before so instead of actually pushing our static files to some sort of destination like what collect static does it will actually pull our static files locally so that

**2:43:39** · then we could push it to the location it needs to go so this is very useful when it comes to building out Docker containers which is why I'm referencing it right in here it's going to come right before this and now when it comes to Jango management commands you might be wondering why do we use a Jango management command versus something else

**2:43:59** · like just a standard python module the reason for this is as soon as you make Jango management commands you then have access to everything in settings. pi basically you have access to everything inside of your D Jango project because Jango is going to be the one now controlling this command itself so you

**2:44:17** · can absolutely build your own python modules that don't necessarily need to do this but as soon as you want to use something like your static files baser or in our case the static files vendor dur we want to make sure that we're using a custom management command the other aspect of management commands is they have to exist in an installed app

**2:44:36** · so Jango has to know about it basically in order for it to work which you could do this by actually just running out into your SRC folder run python manage.py we already saw this this actually shows us all of the built-in management commands that exist right now but there's no additional ones in here so what I want to do is I'm going to go ahead and create a specific app for this purpose and I'm going to call this as we'll say start app Commando just simply

**2:45:02** · Commando because I probably won't use that name for any other app other than these commands which is why I put it in there so inside a Commando what we want to do is we want to create a new folder we'll call it management slash and then we'll put the dunder in it d py and then inside of here we'll go ahead and do another one called commands and then once again the init the dunder

**2:45:27** · init.py like that and then in here I'll just go ahead and say hello worldy and I'm just going to do a simple hello world command so you can see the absolute basic syntax and then you can also take a look at the D Jango documentation if you want to expand on this and really not do what we're doing so we'll do from jango.com agement base

**2:45:49** · we'll import the base command and then I'll just go ahead and say class command and this is base command and then we'll go ahead and Define a function called handle and then we'll put in whatever arguments we want in here which I'll just go ahead and say hello world that's it so the class of command must be named

**2:46:09** · command that's what it's going to look for so now that I have this hello world here I'm going to go into settings.py and into my installed apps and I'm going to go ahead and bring in command in here and then we'll go ahead and run our python manage.py once again without anything on there we'll scroll up and we see Commando in there with hello world so now I can just do simply hello world and there it goes so it's quite literally going off of the name of the module that's what's going to be the name of the command itself now there's

**2:46:39** · definitely a lot more advanced use cases that you can do than just this um but feel free to expand on it as you see fit what I want to do is I want to go ahead and call it vendor pole. py now maybe you call it vendor static files pole. py but I'm just going to remember it as vendor po up high because I'm just going to go ahead and do this right now and that is bring in Vendor Pole the actual command itself into our Docker file to

**2:47:08** · actually bring in that automation so we'll go ahead and say vendor pole and I don't need this argument here just that that's it great simple enough I think at this point we need to actually handle our vendor static files so what I'm going to do here is I'm just going to go ahead and copy and paste the locations as to where these files came from so

**2:47:28** · feel free to pause it here but you can always go back to the CDN where we originally downloaded these two files what I did was a key Value Store you'll see why in just a moment but before we actually start using that one let's go ahead and actually Implement our helper function that we just created so back inside of helpers we got this downloader here I actually should have built out a little bit more to this which would be adding an init module here with those dunders and then we'll go ahead and do from. downloader we're going to import this download file download to local

**2:47:59** · function and then we'll go ahead and bring it in as all as well great so now what I can do back into commands inside of Commando I'll go ahead and just import my helpers function here so I'll go ahead and import helpers which should be my helpers it shouldn't be thirdparty packages rename this if you use another package page called helpers of course I don't think you will but if you do let me know anyway so now what we want to do is we want to use helpers we've got the source files where they're going to come from naturally this could be an external

**2:48:31** · Json file that might be a really good idea if you start having a bunch of vendor static files I don't anticipate to have more than like four or five in this project more than likely it might just be three for a while we'll see the third one in just a moment but what we want to do is we want to use these vendor static f and we want to download them somewhere so what we can do is we can iterate through this dictionary here for the name and URL in vender static files.

**2:48:58** · items right so no surprise here if I print out the name and URL we will see some stuff so we'll go ahead and call this downloading you know vendor static files so the print statement is probably fine but what I actually want to use is simply just self.

**2:49:16** · STD outright that's the more proper way to do it especially when it comes to these commands and how you might end up using it inside of some sort of automation pipeline so with this in mind I'm going to go ahead and run python manage.py vendor poll locally hit enter and we

**2:49:35** · should see the key value pair now the reason I named it this way is because the name is what we're going to store it as so back into our static files we have these names already in there the URL is of course where it's coming from in this case the name and the actual extension the file name itself from the URL is the same but maybe you don't want to store it that way maybe you also want to put like you know two or version two in here like- V2 3 or something like that um

**2:50:03** · maybe you want to put those things in there maybe not it's completely up to you on how you actually end up doing that portion of things but now that we have the files and we will have a way to download them we need a destination and this is the reason I really use the Jango management commands as well in this case is the destination I wanted based off of my actual vendor static file configuration which was this static files vendor dirt I made that on purpose for this command so now going back into

**2:50:31** · our vendor pole here now what I can do is from jango.com we can import our settings here and then we can use the static files vendors dur in settings we can go ahead and get attribute of the settings for that specific attribute itself okay

**2:50:53** · so this is going to be the out directory itself so what that means is down here we'll now go ahead and say out path equals to the directory itself slash the name and now we can see where the destination is going to be so we go and save that and we'll run it again and now we can see the file name the URL it's

**2:51:13** · going to download from and then the Final Destination as to where it's going to go all of this is based off of the actual jeno project itself that is the point we want it to be automated so it needs to run in the Jango project regardless of what system it's on so it needs to be very flexible there but now that we've got that there's probably going to be no surprise here what we can do is we can actually use our Command for downloader so download to local we can actually use it inside of here so we want to say that

**2:51:47** · DL success equals to the helpers do download file to local we're going to grab that URL and then we're going to go ahead and pass the outpath just like that so simple arguments there the URL is coming from the key value pair once we have that we can then say something like if it is successful then we can print out uh or actually we'll go ahead and say our completed URLs is equal to an empty string we can just go ahead and pass

**2:52:20** · that URL there and of course we could also say something like if it's not completed we could add in some issue that happened so You' just be aware of it and perhaps you want it to be a bigger issue like a value error of some kind but for now I'm just going to print out the statement if for some reason it's not downloaded and then once that all that's said and done I'll just go ahead and do another condition on whether or not um it was completed oh

**2:52:46** · this should be completed URLs here so checking if the set of the completed URLs is the same as the actual key value pairs then we go ahead and say Yep they're all good otherwise they're not all good so now what we can do is we can just run that again I run this now and it says successfully updated all vendor static files so we are now ready to move

**2:53:09** · into the next phase of the automation which of course is allowing for those vendor static files to even work right so once again this this is the command this actually will work right in line during the docker file build the next

**2:53:24** · part is actually serving the static files once they're done we have a way to download them we have a way to automatically download them and then we have a way to collect those static files to where they need to go and then we have a way we need a way to actually serve those static files which is what we'll do now with a function called White Noise now White Noise itself is great for this use case once our project

**2:53:46** · gets a lot more robust and a lot more users White Noise may or may not be something you want to use anymore you might use something more like object storage or S3 technology to actually move towards better sery serving of your static files which these things can still happen with S3 so this doesn't

**2:54:05** · necessarily have to change and also just remember your vendor pole command the management command itself if you have no vendor static files in here well this iteration is just not going to do anything it'll just be an empty dictionary and there for it won't download any of those files which is pretty interesting so the last thing I want to test though is I want to get rid of this static files folder here I just want to make sure that the vendors folder is actually being loaded from

**2:54:29** · this so I'll go ahead and delete that and we'll go ahead and run it again and I just want to make sure that static files are showing up and vendors as well and sure enough there they are but I get this warning about the static file dur setting does not exist so one of the things I might want to do here is just jump back into my settings and just make sure that I do make dur and exist so

**2:54:48** · okay being true and maybe parents being true as well save that and we'll try this again to see if that warning goes away so that when I do run it it automatically has those folders and sure enough it does great simple enough and now we have a way to automate this process it's pretty

### Missing Args with Container Build in Railway

**2:55:09** · great so we added two D Jango management commands right inside of the docker build this is problematic for a couple reasons as we'll see in a moment now I have this comment that the database isn't available during the build well the reason it's not available is if we scroll up there's nothing referencing the actual database itself there's no environment variable for that database these environment variables are important during build time during

**2:55:35** · runtime it's different on how it actually ends up working so during build time we can pass in our own arguments from those arguments we can make environment variables or we can change them as we see fit as we'll see in just a moment but if you were to deploy the code as it stands right now these commands will be attempted to run and then you'll run into an error you'll see failed here so if I click on failed go into build logs and scroll down I'll see that decouple has an undefined value of

**2:56:02** · the D Jango secret key but that doesn't make sense because when I deploy it before it actually did work it works just fine the secret key was working so I did mention that Railway does inject these variables at build time and at runtime so that's actually kind of important because it gets a little confusing why aren't these actually working correctly well it actually goes back to what I just said about the arguments during build time you can pass in arguments you don't have to but as

**2:56:30** · soon as you need to use the D Jango project itself you're going to need to you're going to need to use some of those arguments so if you do want the database available at build time you would need that to be an argument and an environment variable both things need to be set and both things need to be true so let's actually take a look at how we go about doing this first off we can you can go ahead and say ARG and then the environment variable that we're trying to use as an argument so if I scroll down uh or scroll up to the Jango secret key this is the very first argument that we might want to have in here so we can

**2:57:02** · set a default value if you want in here or what we can do is just say the environment variable is now equal to that D Jango secret key so if we were to save this and commit it so get status get add-- all get commit and then added

**2:57:18** · ARG this to Docker file and then get push what we're going to see is another error I will show you in just a moment but the next error is the Jango debug notice it does not have a default value in here so we could add a default value directly in the code or we could add it right in here we can say the ARG is equal to the Jango debug and once again

**2:57:41** · we can add a default value in this case I'll give the default value of zero I don't want debug mode on during the bu process either once again I need to set it as an environment variable and the way you do that is just like this so the argument and the environment variable are the same and they actually have to be the same because the arguments are coming from these variables or could come from these variables you also could just set them directly right so in the environment variable you could set them directly as well so the last one is

**2:58:09** · actually going to be something related to our database at this point I'll go ahead and get rid of this print statement on our debug I will make one other change and that's related to our database down here in here I cast it as a string and then I did not add a default now I'm going to get rid of that cast as a string and just set it as a default of none right so basically if

**2:58:31** · it's not available there it's going to go ahead and say none and then it'll just go based off of this SQL light database so this is what we want to test we now have the two primary ones that I think will make a big difference in here as far as how all of this works so that then I can actually run these two commands right here now you can absolutely run your migration commands in here as well inside of those arguments you could use that database URL during the build process and run migrate in here if that's the route you want to go now this process right here

**2:59:03** · is a little bit more specific to how the actual container is being built inside of Railway it's not always done that way sometimes it is sometimes it's not so once I actually were to add in the last one this failed one here we see in the build logs now we've got D Jango debug not being found so no surprise there because we just added it so if we look in here there's that Jango debug and then our settings we got rid of that and then we went ahead and added in that default of none so updated build args

**2:59:33** · I'll go ahead and commit that yes and we'll go ahead and sync these changes now and so that we can actually see that process being built out in here in just a moment so the other part of this of course is then actually using the result of those automations but the thing is we want to ensure that those automations are happening when they should so if you were to build in other environment variables that your Jango project needs

**2:59:58** · to run you need to make sure that you're adding in these arguments in here at that time if there are other ones there might be it really is up to how your project ends up working in order for these two things to work now you could think about doing these things in the startup run as well so in here what I've

**3:00:16** · got is this Command right here where you run python manage.py migrate you might end up doing it here or you might have a completely different process altogether for collect stetic especially if you go into the S3 portion of it the reason we have to do this here is because we're going to be using white noise I typically would not do this in my production projects as they grow I would typically get rid of this from the docker file altogether because it just adds additional time to build the container especially if we're trying to use S3 or some other production server

**3:00:48** · in our case we're using white noise to simplify this process even though maybe it doesn't feel that simple right now uh but the point is that we now see that it is actually starting to deploy our application uh the it didn't fail during the build process it is now in the process of deploying it and so sure

**3:01:06** · enough I now have my application deployed and sure enough these static files are not showing up so now we're at the point where we can finally Implement White Noise which is really easy to do it's going to take a couple minutes to get it going so let's go ahead and do that

### Using WhiteNoise to Serve Django Static Files

**3:01:22** · now now it's time to update our project to use White Noise with d Jango it's really easy if you went to the documentation and just did it right now you totally killed it it will take a few seconds and once you actually do that you'll be able to take your local development app like this and make sure that your production app matches it so

**3:01:40** · the reason you see something like this to me it's always a good sign that your CSS is not being loaded whatsoever there's a chance that you're javascript's not being loaded either but the idea being that our static files just simply aren't being loaded if that wasn't very very obvious so what I want to do is I want to just implement this now the way it's going to happen of course is by following in their documentation which if you go to their website for their documentation it's really just installing it adding into some middleware and then changing your static file storage to what White Noise

**3:02:12** · has and this part you don't need either you probably just need the middleware and the installation but I'll put all three of these things in for these jangle applications once I do that we will actually run a few commands to make sure that it's working correctly then we'll do a push and then I'll talk about why we should be using white noise in the short term but not in the long term instead using something like Jingo storage and S3 technology so let's go

**3:02:37** · ahead and Implement white noise now whenever I see these pip install commands I I jump immediately to requirements.txt add it in there and then I just run pip install the my you know- R to my requirements.txt wherever it's located I just know I'm in the root of my Django project right now so I did that version of the installation great so now that it's in there we'll go into our settings and we'll do the middleware setting and notice that it has to be um you know after J uh security middleware

**3:03:07** · that's the main part otherwise it can be above all other middleware so we'll just put it right next to Jango security M middleware as it recommends so goe and scroll down into middleware here and and we'll look for the security mail aware and we'll just put that in there great so in the long run if we stop using white noise we won't need to do this right we'll just remove that Al together but in the short run we'll leave it right there and then we'll go ahead and run our different commands actually there is that one other aspect which was adding the Jango static file storage

**3:03:37** · portion here and then I'll go ahead and go all the way down right next to static root and paste this in here save it okay great so now we've got all of the configuration necessary now if you dive into the White Noise documentation a little bit more you'll see that their static route is set to static files which is not our static grout but rather our static files dur this is our source directory not our output directory I

**3:04:03** · changed the output directory and we explained that a little bit but I just wanted to point that out because how different developers do this does different uh does differ from time to time in my case we see that right here right in the documentation so so the rest of the documentation is pretty straightforward as far as how it ends up working notice that we have this on Jango 4.2 up for that static files

**3:04:26** · compression this might be something else that you put in here as well to support either one so I'm on Jango 5 so I'm going to go ahead and actually comment out this older one and use the newer one as well so this is going to be under Jango 4.2 so that's why reading the

**3:04:43** · documentation is often a really good idea because this may or may not be on that homepage to now when you're watching it okay so with this in mind let's go ahead and run our commands to make sure our static files are working locally as well as in production what commands am I talking about well the first one python manage.py vendor and poll hit enter and so we want

**3:05:05** · to grab all of our static files in here sure enough it does grab them or it seems to and so I'll go ahead and next run python mopy collect static and just make sure that that's working we'll go ahead and say yes and sure enough seems to be working great

**3:05:22** · okay so now what I want to do is I'll just comment this out for a second and then run vendor pull again and see if that does anything different doesn't seem to do anything different okay great so there is another file that I do know that I need and you might see this in your error with white noise as well you might see this error already so in Commando I'm going to go into management into commands and go to vendor poll and add additional vendor files in here this is actually really obvious even with mine right now if I run python manage.py run server and then open up my

**3:05:55** · project refreshing here a few times what I'll see eventually is a file being missing so let's go ahead and come in here and just do a quick refresh in there there's the file that's missing in here now depending on when you do this the idea being that this file is missing for me there's a possibility that it's not missing for you but the reason it's missing is I never actually pulled it down so there are dependencies that sometimes cdns when you're copying the CDN it might just not be inside of your

**3:06:27** · application so copying these URLs might reference other files is really the point that I'm getting at here and so I'm just going to make the assumption that that file flow banjs map lives right next to flowy min.js because all of these other ones do as well this is not an issue if you're not using flow bite or you're building out your own static files and your own vendor files as well it's an issue right now so we're going to go ahead and keep that one as is I'll run my vendor poll again make

**3:06:56** · sure that I have all of those files in here there they are I'll go ahead and run that server again and then we'll open this up and refresh a few times looks like that map file is now coming through in local development great so I went ahead and paused the video and push all the code into GitHub and then of course Railway but the idea being that

**3:07:16** · white noise actually ran an exception for me when I did not have this configuration in there so white noise can run those exceptions sometimes and I believe it has to do with this setting right here where it's trying to compress the static files themselves that I think is the issue that could happen for

**3:07:34** · dependencies that are actually a part of these static files in this case it just happens to be flowy but with other projects as well so on your local development every once in a while just go ahead and delete out the files that you are using for static files with third party vendors and make sure that well you don't have any issues there with doing your vendor pull and your collect static if you end up going that route with the docker file here but now

**3:07:58** · what I want to do is I want to talk about when you would leave white noise and move towards using something different and specifically using S3 object storage so what ends up happening with white noise is the fact that you just can't upload files using white noise that's just not how it works so for example if you wanted your SAS to have user uploads of any kind they want to upload a CSV file they want to upload an image a video any of those things

**3:08:24** · White Noise will not allow you to download those files it doesn't really have a mechanism to upload them but white noise won't even have something for you to download them so for that reason alone that's when you would move into D Jango storage in some sort of S3 service S3 or S3 compatible service which is really just object storage you can upload pretty much anything into S3

**3:08:48** · whether it's all of your users files whether it's all your D Jango files your actual code itself whether it's your static files that are going to be used with Django all of that stuff is when you would start wanting to use D Jango storages alongside of your S3 compatible storage Amazon pioneered this technology a long time ago so it's often referred to as just S3 or AWS S3 but there's a

**3:09:12** · lot of different Services out there that are excellent at managing this kind of file St St system and the other part that's really good about it is as soon as you use Jango storages you no longer need to use White Noise you would just use Jango storages as a dropin replacement for White Noise they can probably work together fine but Jango stores is what you would use for your static files as well as all of your

**3:09:36** · uploads too so that's actually really really nice about it and there's a lot of documentation on this this is something we'll look at in the future as well but this also doesn't necessarily mean this is how you're going to upload all your files per se really really big files you might have to use something a little bit different like the boto 3 package which is something that works in tandem with jeno storages a lot

**3:09:58** · especially when it comes to the S3 compatible storages I recommend not using something like Dropbox or FTP in this case for your static files especially for your static files you're going to want to use S3 itself because that is going to be a lot faster as soon as you start using S3 to store your files then it's going to be really easy to use a Content delivery Network to distribute your files that would be the next phase after using Jango storage is

**3:10:27** · if you need a Content delivery Network to deliver your static files anywhere in the world that starts to bring a new complexity that we're just not going to talk about yet because White Noise will get us pretty far until you need user uploads white noise is something you can absolutely use and I do recommend it so

**3:10:44** · user uploads means literally the files themselves if you need them to be uploaded and persist that's where you start using Jango storages most likely at least at the beginning you could use boto 3 but if you're using BTO 3 you might as well use jle storages as well um so at this point white noise is going to be really good it's going to be something we can test with we can do a lot of things with it including if you are familiar with the process of building out your own CSS and your own

**3:11:10** · images you can still use White Noise for that your Jango project just needs to be able to pull that stuff in so for example if you do have your own theme file and vendor poll is just another thing that you could do you could do internal poll as well where it's actually pulling from another GitHub repo in there and it would be able to pull that out also um and of course you

**3:11:34** · could use then arguments if it's a private repo you could just use a GitHub access token to actually pull that in as well there's a lot of different things you can do here where White Noise can still really provide a lot of value uh but of course we don't want to get too complex here I just want to explain the rationale between using white noise and then upgrading to something different because well some of you might be really interested in that and if you've been following me for some time you know that I don't usually use White Noise I usually jump directly to jangle storages

**3:12:03** · but it's a complexity that we just don't need just yet uh in our project or just in the learning process in general now it's time for the next fundamental aspect of a SAS application and that of course is users and usually

### Configure Django to use Email with Gmail

**3:12:19** · whenever I think users in D jeno I think I need a transactional email service of some kind I need jeno to be able to send emails to my users so they can verify that their emails are accurate or correct for when they register that's actually what I want to have happen now this isn't the only way to do it in D jeno you can do all sorts of user authentication with d jeno but at the very Baseline level I think having an email first mentality is a good idea and

**3:12:46** · so for that Reon we're going to be implementing Gmail as our transactional email service now I don't recommend doing this in the long run this is great for testing getting everything working correctly but in the long run you're going to want to have your own custom domain name not at gmail.com but rather

**3:13:02** · at your domain name.com and then a transactional email service it's not the same as marketing email but it is specifically transactional email so that's where you're going to want want to work towards in the future but in the short term we can use Gmail both in production and in our local development environment now if we think of our production application at this point as still a work in progress you're in the right track right you're in the right mindset this is definitely not a true

**3:13:27** · production application although it is in a production environment so keep that in mind of course I'll probably repeat that several times because it's fairly important so I do have a whole blog post on this process it's actually really easy to do and it is something that has evolved a little bit over the years but overall Jango itself does SMTP authentication for emails it's not the only way you can send emails there's other ways to send emails with Jango but the built-in native one to D Jango is the SMTP version of J of sending emails

**3:13:57** · which is very similar to like if you use apple mail or Outlook those often use SMTP to also to send emails out so what we're going to be doing here is in this blog post we want to go ahead and actually create our Google account we're going to go through that process we're going to go ahead and set up two Factor authentication actually I'll just show you need to do it you'll go ahead and do and create something called an app password for logging in and then we're

**3:14:21** · going to go ahead and use out our Jango configuration I'm actually going to do this in reverse a little bit I'm going to start with the configuration because this is what you can change for other services in the future so there are several things the first one is going to be our email Host this is going to be the actual domain for the SMTP login so

**3:14:40** · in our case we'll do smtp.gmail.com then we're going to go ahead and declare the email port this is well is very commonly going to be 587 this is for TLS which is the next part we'll use as email use TLS and this

**3:14:58** · is of course modern security protocol in there I'm going to just leave it in as true you can also use the same thing as use SSL but this is going to just be simply false you don't need to use SSL in fact you would use a different port for that which is four five or 465 this

**3:15:16** · isn't always going to be true right so it's going to be based off of the actual transactional email service you end up using for all of these parameters literally all of them the next one is of course the more important one which is going to be our email host user and we want to set this equal to what our host user will be in my case it's going to be hungry pie gmail.com this is an email I use all of the time in these testing applications I don't actually use it other than in

**3:15:45** · these classes next up we're we're going to do our email host password and we're going to set this password to our Gmail app password so whatever that ends up being that's what we're going to go ahead and set so with these configuration items we could probably use a lot of defaults in here a lot of default values in our Jango configuration which is something you can consider doing so to use these we're going to go into CF home we'll go into settings.py and I like to put this at the very top right near baster or secret

**3:16:15** · key this is usually where I I put in my email config so email config right in here right and so what we want to do then of course is use our python decouple to grab these configuration items that's the reason I put them in EnV is to make sure that they're working correctly so I'll just go ahead and say config and then this and then we'll go ahead and say that our default is equal to SMTP at or gmail.com and I'm just

**3:16:42** · going to go ahead and copy and paste the rest of this which you can find all of this stuff on the blog post itself but the idea being that we want everything from our environment variables especially when it comes to email itself and this should be use SSL okay so with this in mind now that we've got the email configured let's go ahead and start actually making sure that it's working correctly right so that means log to your Gmail account and in my case

**3:17:11** · I'm going to see something like this right so this is my hungry Paya Gmail account then I'm going to go ahead and go to manage my account go into security and you're going to want to scroll down and make sure that you have twostep verification on or two Factor authentication so 2of you want to make

**3:17:31** · sure that that's on if you don't have that on I don't know if this next part will work and that is going to be app passwords you're going to do a quick search for that and there is app password so if we open this up this is how I'm going to be able to actually log in and create things now I have two- Factor authentication on so it's asking me to confirm who I am I'm gonna finish that now that I've confirmed who I am and I actually want to do this I'm going to go ahead and create a password based off of my SAS you know SAS Foundation

**3:18:01** · app or whatever I'm going to go ahead and hit create and here is that password so I'm going to go ahead and copy this and I'm going to paste it in to this Gmail app password thing just like that so assuming my settings are correct and my emails correct we are on the right p path here now you can delete this at any time and you could also say something like sasr and hit create and this one right here this one right away we might actually want to come into our production application into variables and then just go ahead and say our email

**3:18:34** · host password and paste that in as well now of course you're probably going to want to fill out the rest I'll let you do that at another time but the idea is you definitely want to have those things in there if you want to use this in production now there is one more aspect of this that you will want to have in order for testing purposes and that is going to be our admins and also our

**3:18:58** · managers so in my case I'm going to go ahead and just give admins and managers the same thing and I'm also going to go ahead and then start the process of building out the list and and I will just go ahead and say Justin and this is at coding for entrepreneurs gmail.com so the person you're sending it to the manager or the admin and then a valid email in here as well this is how we're going to go ahead and test this in just a moment but these managers and admin are really useful for things like 500 errors they will get emails for

**3:19:30** · there of course if the email actually ends up working so with this am I'm going to go ahead and just give this a shot with python manage.py send test email and then we'll do D- admin and what it should do is that nothing it should show me nothing now if I were to change anything on here let's say for instance in EnV and I just change this to two or I make the incorrect password and then run this again it's going to give me an error so this is an SMTP authentication error so

**3:20:03** · these passwords are what have changed over time with Gmail itself so if I were to delete this password for example I go back into security into the app passwords themselves so let's go ahead and do that and if I were to delete this one let's go ahead and delete it and then I'll give it another try and try to run this again it's going to give me that the username and password are incorrect Okay cool so no obviously that makes sense

**3:20:30** · that they're not they're incorrect because I deleted it so the authentication does make a big difference as far as how you end up using this in your applications right so definitely make sure that you have the correct ones uh but once you do you can send this test email and assuming that you can authentic do all that this then is saying hey you're good if there's no error that's a good sign so then what you could do then is go check in your

**3:20:55** · let's say for instance your manager account this is not my manager account but I can at least look in this account and say from hungry piie looks like these two were just sent from me so I could try it again with another one and I have just a built-in filter on Gmail to see that and there there are three of them now and so then in my admin account which is coding for entrepreneurs at gmail from Hungry pie it's possible that I actually sent it to the wrong email let's try that again by copying that one out into settings and perhaps I spelled

**3:21:27** · it incorrectly nope that actually did do it correct so let's try this again it's also possible that maybe it's going into spam and it is not so it's actually not sending it into from Hungry Pi looks

**3:21:42** · like my filter was off I just did a quick search for it and here's all of those recent as well as a test from earlier today so I can do this again and we'll just send it again and sure enough what I should get if I refreshing here is yet another email and there it is and now take this to something more like

**3:22:01** · this where you can actually use admin users as an external value you probably don't want to hardcode it the only reason I didn't show you all this is because it's fairly straightforward at this point and you can always copy the code on the repo itself

### Django Admin User + User Passwords

**3:22:19** · now we're going to take a look at two features that I think set D jeno apart from many other Frameworks that are out there the first one we're going to take a look at right now with our project running on Local Host just navigate to the path of slad and here it is this is the entry point to the D jeno admin this is one the one of the more powerful features that jeno has because it allows you to really manage all of the data as

**3:22:44** · well as all of the users inside of your jeno project notice that I said all of the users this is the other feature that D jeno has built in which is of course users now you might already know that and hopefully you do but the idea being that the Jango admin gives us a peak into how all of that works and also how we can do authentication ourself so we're going to emulate certain aspects of the jeno admin in the near future but

**3:23:11** · the idea here is right out of the gates we see that it says D Jango admin and it's asking for a username and password it has nothing in here about registration there's no way for me to actually create a new user yet so if I try to log in here with a saved username and password it's going to say that I can't so we actually need to create a super user that will be able to log in here a admin user for this so the way we

**3:23:36** · do that is of course going back into our project here opening up the terminal make sure you're in the root of your Jango project where manage.py is and then just run the command python manage.py create super user hit enter and now you

**3:23:52** · go ahead and create that user I'm going to use the user CFE so I'll just say CFE I don't need to put an email address here but I totally could and then I'm going to go ahead and put a whatever password now the reason I'm putting a whatever password as in not a great password only has to do with the fact that this is my development mode once I

**3:24:14** · go into production I want to give a really good super user password because of what they can do so at this point I actually created this user and it's quite literally the same password I use in my development mode all the time so I can just go ahead and hit log in here and in my case it's going to work now yours you're going to have to fill it out and stuff like that but this is the D Jango admin this is one of the key things that D Jango does so so well the

**3:24:38** · key thing right now though is the fact that it says users here of course I can click on this and I can navigate to that recently created user and what do you know user CFE we got this form here there's a thing for password we'll talk about that in a second we can add in some personal information if you did fill out an email address when you created this user you well would see it here we've got permissions that are built in once again permissions how a user can do things is

**3:25:07** · built in to D Jango now there's a lot of different things on how we can approach permissions in the project itself but at least at the Django admin we've got a couple Flags here that we can change on whether or not this user should have permission to the Django admin and then we can also see when they log in and when they join and all that so a lot of really good data that's going on in here the main thing is this data right here

**3:25:31** · the fact is this is not the actual raw password the raw password is going to look something closer to the username but there's no way for us to see this password this has to do with modern cryptography and hashing so we enter a

**3:25:48** · raw password we enter some string of text and then it turns it into this hash we can actually verify this inside of the neon console as well we can look at the database itself so what we want to do then is let's actually navigate into our Dev Branch if you aren't already there go into your tables once again make sure that you're in your Dev Branch go to off user and you'll actually see

**3:26:11** · that user itself right so you can scroll over you can see the username in here you can see that these things are empty strings whether or not they're staff or active when they joined all sorts of things in there it's great so we see the password as well so this password of course isn't the raw password now there's no real good way to reverse engineer this to expose what this password would be there's only a really good way to verify that a password

**3:26:41** · that's being used is the correct one in other words to allow them to log Lo in there is a way to do that and I want to show you how to do that now so in order to actually verify a user password we're going to go ahead and jump into the python managed shell okay so in the

**3:26:59** · python shell what we can do here of course is all sorts of things related to our jeno project in this case we're going to go ahead and grab the user so you can just watch this to learn a little bit here but the idea being you can import the user model from here for

**3:27:16** · those of you who are a little bit more advanced or want to advance that user model you might want to change the user model in which case you want to use the git user model this is a little bit more advanced so if you're not sure what I'm doing here just go ahead and stick with the default user model which is this right here now we haven't talked that much about what's going on with models themselves but the idea here is that we

**3:27:41** · can import the model the default D Jango user model and I can do querying in here so user. objects. all will give me literally all users as a query into this command line here and I can iterate through all of them so for user in user.

**3:27:57** · objects. all I can actually print out each user. username and I can see these things come through what I can also try is to print out the password so user.

**3:28:11** · password and I can see what that does once again it is not the Raw password not at all so of course inside of the shell here I can also create users now one of the ways you would do this specifically with users is user.

**3:28:27** · object.create user or user. objects. create super user I'll let you play around with these commands as you see fit the way you know what the arguments are is just by typing help pasting in that command and hitting enter and you can see the different arguments that come in in here for either one great so with this in mind I'm going to go ahead and quit out of there and the idea now is I want to

**3:28:55** · actually just see how this password ends up working right how do I actually verify a user's password because when we went to the Jango admin we actually logged in right so that's what we're really unpacking here we have a username and then we pass in a raw text string here and hit log in and it logs in so

**3:29:19** · we're not typing this in I definitely did not type that in I typed in the actual raw password in this case that raw password for me is just simply learn code not a great password I don't recommend using it but the idea being that's the actual raw password that I have so how do I verify this now the way we're going to do this is by saying my user equals to user doobs doir and hit

**3:29:44** · enter no worries if you're you're not that familiar with what's going on with these queries that's not the point here but what we can see is if you have a user in your database this will grab the very first one that's available and that of course is the same user that I have so one of the things you might do or the logic is to say my user. password is

**3:30:06** · equal to PW or equals equals PW hit enter and of course this is false this cannot be the correct way because as we saw for when we printed out that user password we got this so those two things are not equivalent whatsoever and therefore that login would always fail it would never be the right password in this case but there is a built-in method on your user object so you can say something like my user. check password

**3:30:37** · and then you can put in the actual password itself the actual raw string so if I do check password ABC I get false if I do check password of the actual password which was learn code I will get true and so what's happening is it basically rehashes this right here the

**3:30:55** · same way it does when we create the user however we create the user and then it verifies that hash against here and then that of course is going to be a true value and therefore we can now say hey this is the right password go ahead and log in now I'm going to expand on this in the next part where we actually do this manual portion but the idea being it's really critical we never save passwords as raw data so if you ever use

**3:31:23** · something that's not jeno and you have to build out your own authentication because if you're not using D jeno you might have to do that then you're going to go ahead and make sure that your password has never the raw password itself it's never stored raw now the

**3:31:39** · other thing is reverse engineering if somebody knows a way to reverse engineer a hash like that please let me know I'd be really interested to seeing that and seeing how it works this as far as I know is a modern way to make sure that your passwords are nice and secure on pretty much any database even if it gets leaked even if this hash gets leaked because it's not the raw password now email addresses on the other hand well that is going to be stored as a raw pass or raw text right so hello at Team CFE

**3:32:08** · for example real email address we hit save and continue that of course is going to be the actual email that's in the there so of course security is definitely a concern when it comes to the some of this data but the point of this is that our passwords are stored in a secure way or as secure as they possibly can be and they're really easy to access the insecure version is not so

**3:32:35** · that's actually pretty cool and then the Jango admin of course we can do all sorts of really good stuff in here as you'll see when you start working with Jango a lot more but at this point you can obviously create new users in here and allow them to start using your project once you actually build that in so what we want to see is actually that process of doing our own login process because your end users should not be logging in here instead they should be going into your project itself on like

**3:33:05** · something like slash login so let's see how that's done it's fairly straightforward but the point is that it will be a process that we want to actually have some basis of understanding of before we use a third party package like something like jeno

### Django Login View Logic

**3:33:23** · allo all right so back into our jeno project I'm going to make sure that I'm logged in on the jeno admin and then I'll go ahead and navigate into the homepage one of the things you should see is this you are a user in here this has to do with that template that we created before this welcome user message the condition on checking whether or not the user is authentic ated in there and

**3:33:47** · this of course came from the Geno templates with this process right here that's actually taking in the request as well as off related activities now our views are very similar but the request goes there by default it's not enriched it's already there it's available to us in other words the request. user.

**3:34:06** · isauthenticated we can print that specific thing out we can also print out the user themselves so just request die user so if we save that and go back to our homepage and refresh a few times we can see that the user is authenticated and it gives us the actual username this is quite literally the user model itself so I can do something like user.

**3:34:29** · firstname save that and that would actually be correct assuming that there was one in the database there's not one in the database at this point so this is actually really nice that that exists now the flip side to this is if I log out of the admin and and try to access the homepage

**3:34:48** · now let's go ahead and navigate there real quick we get this error here Anonymous user has no attribute first name this has to do with the fact that I am trying to access data from a user that is simply not logged in they just simply do not exist yet so often what you'll see is a condition in here something like if the request user is authenticated then I'll go ahead and start doing things like printing out their name or enriching context with

**3:35:21** · their name and so on now the point of what we're going to do now is to ensure that this works without logging in to the actual D Jango admin but rather allows our proper end users to be able to access the same sort of data so the

**3:35:38** · way we're going to do this is by creating a new app so let's go ahead and navigate into the root of our Jango project we'll do python manage.py start start app and I'm just going to call this off the reason I call it o is because it's going to be for login and registration we'll start with just simply log in now this obviously could exist in other places because really I'm just handling the views here I'm not putting a new model in here I'm not doing anything with the admin or migrations really just views so what is

**3:36:09** · it that I want to have happen in this view well I want a login View and as you remember every view comes in with a request and then it returns back a response so we can render out a template in here just like we've seen before and we can say something like o login. HTML

**3:36:28** · and we'll leave it as empty dictionary for now now of course we can take that same concept again and do our register view right so at some point we need to allow users to register themselves and of course in there you might want to actually send an email to make sure they verify their email we're not going to do that just yet we just want to see the logic behind the login view this is one of the advantages of reading the D Jango documentation if you do a search on the genuine documentation you'll see how to log in a user and what do you know here

**3:37:00** · is some code that will show us how to do exactly that at least on The View side it doesn't show the template I'm sure there's somewhere that shows the template but we'll take a look at that in just a moment so I'm going to go ahead and copy a lot of this code and I'll paste in here and then I'll go ahead and bring in just these few lines here and paste just like that okay so

**3:37:25** · what's happening here I'm going to open it up a little bit is we grab our username and password from something we'll look at that in a second then we call this thing of authenticate so this is going to look for the username and password and it's going to verify it against the database and then it's going to go ahead and return back a user if that can be verified if it can be verified then they go ahead and log that user in in other words it will turn this from being false

**3:37:57** · to true that's all that that's going to happen the login portion is going to turn it from false to true the authentication portion is going to check to make sure that this user has the correct username has the correct password and can actually be considered a user so that's what we want to do we want actually see how this is done so before I actually pull all of this data I'm going to put some very bad practice going on and put the raw data in here so in my case it's just CFE and learn code

**3:38:30** · and so all I should be able to do is say login here and then exclamation mark great so with this login view going I'm going to go back into CF home into my URLs here I'm going to go ahead and do from off we're going to import views as as off views and then I'll go ahead and create a path specifically for the

**3:38:52** · login and it's going to be off views. login view make sure you're using login view it's really easy to accidentally just say login call it login just like the actual function for logging in a user okay so now we've got the login URL so we should be able to see it to some degree on that page so if I refresh into my login I should get a

**3:39:24** · template does not exist here no surprise there whatsoever because I did not create that template yet but if I go into python the actual manage server notice it says log in here so if I go back into that view we see a log in here

**3:39:39** · so in other words it should be logging me in it should be actually allowing me to be logged in as a user user so let's actually verify this a little bit with doing a redirect so I'll bring in the redirect shortcut And all I'll do is return redirect to the homepage great so how I'm going to do this now is I'm going to go into the admin the admin user is not logged in anymore so I'll go back into simply log in hit enter this

**3:40:11** · in theory should redirect me to the homepage looks like it did and if I go back into admin now what do you know I am actually logged in so the user actually does have everything authenticated to some degree in terms of the password and all that so what I want to do now is I want to make a new user cf2 so let's go into users here I'll go

**3:40:37** · and create a new user I'll do cf2 same password and everything just like that okay no big deal I'm going to go ahead and say that they're active they do not have staff status or super user status I'll go ahead and log out then we'll go ahead and go to our new page of login this of course will take me back to the homepage you are a user things are looking good let's go to the admin now and boom you are authenticated as cf2

**3:41:08** · but are not authorized to access this page you like to log in with a different account so it show shows us the permissions as well by default the actual user has no access to log into

**3:41:23** · the admin which of course is really important we don't want just any user to be able to log into the admin we only want our user to log into the admin now we just need to create the template here that will actually submit data with a form an HTML form that then would have the username and password in it let's take a look at how to do that now

### HTML Login Form and Template

**3:41:49** · now let's go ahead and create the template for our login view so the idea being we want to create the template so let's go ahead and copy the path go into the location in templates here and just go ahead and add that in just like that you hit enter it's going to make the directory for you as well as the page so we'll go ahead and do extends base.

**3:42:05** · HTML and then we'll go ahead and bring in our block and content and then we go ahead and do our in Block in here or in Block content rather okay so now that the template exists if I refresh in here it's now looking a little bit better so what we want to do is we want to create an HTML form that's how you do it you

**3:42:31** · just write out these template uh tags here or these HTML tags and you put in input type being text the actual name itself we'll talk about in a second but I'll go ahead and say user and then we'll go ahead and say placeholder equals to username something like that and then we'll do another one for our password so the input type for password

**3:42:54** · we will leave as simply text the name again we'll look at in a second and we'll go and say your password and then we'll go ahead and just do a button and typing submit and then I'll go ahead ahead and say submit or rather log in

**3:43:11** · great so this is a basic form now the question is is where did this form actually go so the thing is we want it to go to SL login we want it to make sure that it's going to that path because that's the exact path that we have our login view our login view can then handle data from that path just

**3:43:32** · like as if we're going there on our web browser whenever I open up that URL the path is being handled by this view we can do the same thing with a form we can actually send something to that view if if we leave it as is it's not going to really work the way you might think so if I refresh in here take a look at the URL at top if I just type in gibberish here and hit log in the UR at top actually appends those things up here and it's two instances of user we

**3:44:01** · don't want that to happen especially not with username and password so what we want instead is we want to say the method equals to post so this will actually send the data to the back end there's a lot of things about this but this is why the actual documentation says request. poost it's looking for a specific method to be able to send this data now at this point I would say keep

**3:44:26** · it at request.get or the method being get because that's the default keep it there and try this somewhere else see what that action actually does and just play around with it but for now I'm going to go ahead and put it at post we'll go ahead and save this here and then we'll go ahead and try TR that again I'm going to go ahead and navigate just to SL login and then I'll put some gibberish in here hit login and I get forbidden so Jango has a built-in mechanism to just prevent forms from

**3:44:58** · being submitted so the reason for this is if we go back into our view with every web framework that's out there ever if you accept post data that means that that is potentially a vulnerability to your application so if you get really bad data here and then you run this code let's say for instance like with eval if you're not familiar with eval you can actually print out something like this where it's actually going to run that

**3:45:25** · code it's going to run that python code for you so let's go ahead and verify this by coming back into our login page and just refresh in here and we don't want to resubmit the page we just want to rigate to it we can see that it printed out hello right so obviously you don't want to run eval whenever possible but that mechanism that we just saw when we ran the password and username stuff

**3:45:49** · this is one step towards making sure you don't accidentally do something you shouldn't this is called cross-site request forgery so other websites also can't just submit a form without some more advanced mechanisms in place in other words another website can't create this same form and say yourdomain.com

**3:46:11** · login that of course is something we don't want to have happen now technically speaking they can attempt to do that but that csrf token um or this verification here failing will prevent it from doing it so what we need to do is like it says in our template we just need to add this token in this just enriches the form on a you know template level to actually allow for this to be submitted and so if we log in here again

**3:46:41** · go to this page and actually view the source itself by inspecting the element open up that form here you will see a new input has been added to it with a value so this is the middleware token this is something you would need if you were using JavaScript to submit the form

**3:46:59** · that's outside the context of what we're trying to do here but I just wanted you to be aware of that so now I can do ABC ABC hit log in and nothing seems to happen but something did happen it just didn't tell me what happened so what we can see here is now I can actually print out request. poost or none we'll do or

**3:47:19** · none because the login view can be request.get so you can also print out the method that's coming through with request. method so we'll look at both of those things we'll come back in here I'll resubmit that form go back into our page and we can see that it's post data and there's the data that's coming through now this case is giving me user and a list of items why is it doing that well it's because in our login here we have two inputs named user that's not

**3:47:51** · what we want to name our inputs we want to name our inputs to match what's in our view now the documentation gives you what you can do which is simply username and password but remember the login view itself can have a git method so in other words I want to now add in another condition here and say if request.

**3:48:14** · method equals to post then go ahead and do all of that stuff otherwise don't do it otherwise just render out the template itself and that's it so now with this am I I'm going to go ahead and log in again I will then see that the username is not inside of the multivalue dict error in

**3:48:40** · other words this is looking for username so another thing that you might do here is just put a git parameter here and we'll say or none as well soar like this print statement get password and then or none

**3:48:58** · as well then basically we can also say if all username and password then we can go ahead and run all of this stuff now this condition this check if you will Is Not Great this

**3:49:14** · there's a built-in mechanism called D Jango forms that will make this much better that's something we'll look at in the future and realistically in the short run we are not going to be doing this manual process for login or registration we're just doing it for now so we can see how this all works with this in mind let's go back into our login page and I will not actually resubmit the form I'll just go back to it and now type in my raw user and raw

**3:49:43** · password hit login and let's go ahead and see if this user actually logged in we'll go into the admin here I'm still logged in as CFE user so it's not actually in the right place so it didn't actually log in correctly so why is that well back into login.

**3:50:01** · HTML these names are still incorrect so this needs to be username to match with the item that is trying to be git and then the actual login with the other item from the dictionary that's trying to be get or got or looked

**3:50:19** · up but the idea now is I have the username and password here as data that's coming through and data that I'm getting notice that the raw passwords are actually coming through so that raw data is showing up that's an important part that needs to be understood as well so now if I do the user and password hit

**3:50:38** · login now it should actually log me in and sure enough it does and then if I go into the admin I should see the fact that that now I can actually go into the admin once again so it's actually working and it's working as one would hopefully expect so here's the big

**3:50:54** · problem with this right here I'm actually printing out that raw password that is a security risk and one we don't want to actually have so I want to get rid of that as soon as possible that is definitely a piece of this that I want to change the next one is this your password nonsense here is the fact that well I'm putting in raw data it's not a password input so back into our login here we change the type from text to password we save that now if I

**3:51:24** · refresh on that page it will then actually fill in the things that I've saved and I can just go ahead and log in and here we go I now have that login element this is great and it also highlights a number of things that need to be improved in terms of the logic here one of the biggest things that can be improved is the validation of this

**3:51:47** · data jeno has built-in ways to do this we haven't done it yet once you have that built-in validation you could then also display messages or better messages to the end user in other words if you go into this login page and put in some gibberish here and hit log in it's not telling you any errors it's not allowing you to fix the problem that you may have which is not true with the J admin right

**3:52:15** · so if I were to log in here and type something out there is a validation error right there and it keeps that user name that I put in that was gibberish but the point is we can actually once all the conditions are correct and there are no validation errors you can actually log in so this actually does work as we see fit um at this point but

**3:52:37** · the reason we're doing this is really to lay the groundwork for a much better package that will just handle this for us than us writing these things out now we're going to take this process and do it all over again but we'll start with the actual HTML template the reason we're doing this process again is it's because it's something you'll do a lot in D Jango that is rendering out some sort of HTML form setting up that form

### Register Users the Hard Way

**3:53:07** · so it can actually send data back to jeno D Jango then handling that data whether it's stored in the database or checking if it should store in the database those two things are going to happen right now and it happens all of the time in D jeno there's still the key thing of validation and how jeno handles that and does it really well that's something we'll discuss in another section but for now I just want to repeat this process again so we really understand it well so what I want to do then is jump into off and go in create register.

**3:53:40** · HTML this is going to be basically the same thing as login HTML so go ahead and paste in a lot of the stuff from that now if we think about the HTML form itself once again we want to think about what is it that I'm trying to do on a registration form what

**3:53:58** · I'm trying to do is I'm trying to save data in the database or at least check data in the database so that means I want the method of post I'm always going to want that method next I need an action of some kind where I want to send this data and that of course is is going to be on register so I actually don't have that action set up just yet but I want to know that that's where it's going to end up going so what's next for this form yes I need that csrf token as

**3:54:27** · a security measure so other websites can't send automated registration for their users or any users for that matter so the next thing is the inputs that I actually want to include what is the data I'm actually trying to collect here well we probably want to have the username we also might want to have an email right so the name being email the placeholder being your email or

**3:54:54** · something like that pick a username for your username and then password well yeah we definitely want to have that password in there and this at a very fundamental level is probably all we need to register a user now once again this can

**3:55:11** · be improved just like our login screen this this can be improved in a number of ways one of them would be to like verify the password have two versions of that but the thing is we're not really doing the D Jango side of forms yet we will at some point right now we're just doing the process of ingesting that data and the logic behind thinking on how we can do that so we've got this register.

**3:55:31** · HTML with these different elements here so let's go ahead and create the view for it so back into off into views I'll go ahead and do some elements of this as well so I'm going to go ahead and uncomment out my original function for register View and it's going to be off.

**3:55:50** · register. HTML so the very first thing that I want to do is I want to make sure that I can render out this form and I can handle the action of register that's the very first thing fairly obvious hopefully but let's go ahead and actually bring it into to our URLs so right next to login I'll go ahead and bring in register in here and then I'll

**3:56:11** · go ahead and use our register view as The View great so with this in mind let's go ahead and make sure our project is still running here sure enough it is so let's go ahead and jump into our project in here and we'll go into simply register and there we go so it's actually rendering things out this is great so it's a good sign that it's showing us that we should probably change the button name from login to

**3:56:38** · register okay good so with this in mind now I want to actually perform form all of the logic in my view so once again we want to remember are we doing request. poost or request.get post data is for accepting it into your server and something you'll store potentially in your database git data you typically do not do it that way git data is quite a bit different it's something we'll look at later but get data can be really useful for search

**3:57:11** · like when you want to narrow down what you're looking for get data is where you might end up with that so in this registration view once again we want to get the request Post in here and we'll go ahead and do that like that and then I'll go ahead and print out request. um post data there and now let's go ahead and run that I'll go ahead and say abc abc.com hit register I should have

**3:57:42** · refreshed but let's go ahead and try that again and it submits some data so it submits the username the email and the password the raw password the one that's stored so it actually gave me all of that same data which is interesting but something that's important so that means that I can actually grab these things right here and I can also grab the email itself and here we

**3:58:09** · go now what I want to do is the very first thing I need to check is whether or not the username or email exist in the database already so the way we're going to do this is by importing the user model now I did show you one way to import the user model which is D Jango contrib off. models you can import the user this way this is not recommended because you can customize Jango user model so instead where you want to import it from is from Jango contrib

**3:58:39** · dooth you're going to import the function of git user model and then you'll go ahead and do user equals to get user model this is a funny way to do it but it's definitely the best way to do it for the long run so just do it this way foret with this in mind what I can do is I can now query the database so I got post data coming through here I can say something like user exists Qs equals to the user model.

**3:59:10** · objects. filter and grab the user name and you can say I exact equals to username this will do a query for the entire database for the username that's coming through then you can do something like exists so I can change this to

**3:59:30** · username exists for that query set I can do another query set similar to this for the email right and so then you just do email exists now you you have two potential validation errors two potential things that'll be like n you can't you can't use these These are already taken this is something that Jango forums does really well something we're not going to do right now because

**3:59:58** · we're going to be using a third party package for both login and register but you still need to see how these things work so jeno forms will do the validation in the future but for now what I'll do is I'll just try to create the user with this data so we'll go ahead and do user. objects. createuser

**4:00:18** · now as you may recall you can see what's being passed in here inside of D Jango you can or rather inside of vs code you can attempt to go to the definition or which you could do instead is go into the python manage Wy shell to see the arguments that come through of course you can also check the documentation a lot of times I find this to be a little bit faster by just coming into python manage.py shell grabbing the

**4:00:46** · Imports and then doing the thing that we want to inspect which is just doing help around that item and then you can see the arguments that are coming through here username first so we' pass in username email second email being email

**4:01:04** · the one that's being passed right there and then password in there as well so password being password save that okay so now with that in mind everything's set up I'm going to refresh in here and submit the data I get this Integrity error these things have to be unique this is why validation errors are really really important it's saying that

**4:01:32** · this user already exists of course it does we already created that user so we could put this for now into a tri block and just say accept pass or except we'll go ahead and just you know maybe we'll just say pass for now so we'll save it like that and then we'll go back into register hit continue this time it doesn't show me an error let's go ahead and put some gibberish in here and do

**4:01:59** · something like that hit register I don't know if the user was registered or not for real so let's go into the admin log in as our admin user go into users and what do you know there is that one that I just added with some gibberish in there and so so on so this isn't

**4:02:16** · necessarily a great way to do registration we could spend a lot more time making this really good my hope is by the time you finish this entire application the entire SAS foundations especially when we start talking about Jingo forums is you would be able to come back and build this thing out quite a bit well better so it works a lot better for a realistic us case but the

**4:02:39** · thing is user authentication can start to get really complicated especially when you want to bring in Social authentication like logging in with GitHub which is something we definitely want to do and also since D Jango has users already there's a lot of really good thirdparty packages that will do the login and registration for us and it will do other things like reset password

**4:03:03** · or you know password verification or password strength there's a lot of things like that that can also be done in other packages and also really querying these usernames and all that so that's definitely something we want to do now by implementing D Jango all

### Configure Django AllAuth

**4:03:22** · off now we're going to go ahead and Implement Jango allo this package has a lot of flexibility and customization that you might use at some point in the future but the main thing that we want to do is we want it to be our regular

**4:03:37** · username or email authentication to start this also includes email verification that's why we actually set up Gmail as jango's transactional email earlier but it also whenever we want to start adding in Social authentication the Jango allo package will help us with that so if you go to all off.org and

**4:03:58** · then navigate over into the documentation you'll land on this page right here this is the process we're going to go through so the first thing is we want to just go in the installation into the quickart guide and since eventually we'll be using the social loss stuff I'm going to go ahead and work off of that package itself so inside of requirements.txt I'll go ahead and add that one in open up my terminal and we'll go ahead and navigate into pip install R requirements.txt just get that

**4:04:27** · out of the way right away and then we'll CD into our SRC folder once again to make some changes there next up what we see is our templates here this we won't need to change by default it has all of the things necessary including the request which is what allo needs so just make sure that you have that if you somehow deactivate it for some reason next up the authentication backends we don't actually have this one so we want to go ahead and bring it in by default the Jango model back end is

**4:04:55** · the default one that's already on there which you could verify in the Jango code itself uh which we're not going to do at this point but we'll jump into our settings I'm going to navigate down to where my off password validators are and I'm going to go ahead and put in here and say d Jango all off off config and

**4:05:15** · we're going to go ahead and paste this in now these three dots here we want to comment out we actually don't need those we just need this and this that's it great next up installed apps no surprise here we're going to go ahead and start off with the two things for all off and then I'll go ahead and navigate all the way up to my installed apps here and

**4:05:36** · I'll just go ahead and say third party apps and paste this in next up I'm going to do is I'm actually going to bring in my Social account stuff I will keep this in here I'm not going to put GitHub in just yet we will do that soon but you will see that GitHub is right here so

**4:05:53** · feel free to add it if you like but there's a few configuration items we need to take care of that we're not going to do just yet we're just going to be doing some of the basic stuff for now next up we want to scroll down to the middleware we I'm going to go ahead and copy the account middleware here and I'm just going to put it after the message middleware as it's written there which is this one right here simple enough and

**4:06:15** · then the final step we will eventually have the Google or actually the Social account providers without Google we didn't set up the Google stuff we did set up Gmail to send messages but nothing related to the authentication that's uh outside the context of what we're doing in this one but I will put in the empty d uh you know dictionary

**4:06:34** · for it when we actually do come back to it at some point next up I'm going to go ahead and grab the URL path the URL routing these things I'll come back to in just a moment but you'll see it gives us all of the different URLs that you'll need to log into your account um as well as the templates that are related to it so inside of URL step high I'm going to go ahead and import include from Django URLs and then I'll go ahead and bring in accounts and all off the URLs so this

**4:07:02** · would be a good time to think about redirecting these URLs themselves to accounts so what we'll have soon is accounts login and then something like accounts and uh sign it or rather sign up I think but we'll go ahead and take a look at what those actual URLs end up being so that at some point you can redirect these as you see fit cool so with this mind let's go ahead and now run the python manage.py migrate as the documentation says to do

**4:07:33** · um but also so if we look into our settings here if I scroll up a bit we see that we added something to our installed apps whenever you add something to install apps it's probably a good idea to run migrate even if the actual you know installation process didn't tell you to do that okay so with this in mind let's go ahead and jump back into our project here let's make sure it's running and then we'll go ahead and take a look at these new URLs so we come in here and we do accounts SL login this is

**4:08:05** · actually the default URL that jeno recommends to have a login for your users I put it in as simply login just as an example but this is the default this is the one that you're gonna want to go off of in the future going forward once again we can always redirect things as we see fit cool we're almost done configuring everything for our Jango project but there's things that we want to consider as we look at this one this sign in the username is there perhaps we

**4:08:33** · want username and email I think a big part of using Jango all off is how it can help you with verifying emails so I actually absolutely want to have email as one of the options if not the only option we'll take a look at that in just a second but then the sign up notice that it says accounts sign up this is the registration process notice that we've got an email being optional which is also something I do not want to have so back in a quick start what we do is in the regular accounts here we've got configuration that we can add in so the

**4:09:05** · first one is this account authentication methods we've got the defaulted username as we just saw so the default login we can also set email or username and email so if you do set it to email you need to have your email account required being true let's do those two things right now so the authentication method let's scroll down here and we'll put it right

**4:09:28** · underneath where we put our genu configur or allof configuration stuff here I'm going to put the first thing is the authentication method being email as soon as I do that I also want to go ahead and say it's required and I think we set it equal to true great so we save that everything should be refreshed in our Jango project so let's go a and take a look at it now if I refresh on the signup notice that email is prominent it's the very first thing if I go to sign in notice that it's now asking for email so if I

**4:09:58** · attempt to sign in here it's going to say this is invalid I can't sign in with just my username so this is might be where you want to change this to being username email so you can use either one and so your signin process is just log in and now you can actually still sign in with that and so when you do log in you go directly into accounts SL profile which might be where you want to redirect your user it also might not be but this also gives us the ability to see all of the different paths that our

**4:10:31** · jeno social off gives us there's a ton of them on here so that's definitely something that we'll have to explore more as we go forward but the main ones being hey confirm email change your password you know reauthenticate all sorts of things that are actually really good uh as far as coming out of the box from uh you know Jango allaf so if we do

**4:10:53** · want to change where we do our redirect after they log in we just declare this parameter right here this is built in to Jango to some sort of redirect now keep in mind that when we did this in our off we didn't actually take that into consideration so this redirect right here should have actually used that same module from this settings uh but it wasn't meant to because I knew I'd come back to it here so that's something else to think about as well now there are

**4:11:20** · other configurations that we might want to think about with janle all off especially with email and building everything around email that is going to be our scrolling down a bit we can have our email required we already got that one account email verification we want this to be mandatory we want to make sure that they're always verifying their email when they come in in so we're going to go ahead and set that as the parameter of mandatory great that allows us to then

**4:11:52** · you know require our users before they can ever even use their account to verify their email the other one being like the account subject you know the actual subject line that comes through we can also use something like that as well so there we go now that we've got this there are some things that we still need to change a little bit and feel free to look through the documentation here as far as all of the different things you can change when it comes to Jan allo like the login by code if you

**4:12:23** · have something like that enabled the number of times that are there you can also do log out on git which is not something you always want to do you can do log in on git as well or log in on confirm that's another one that you might consider uh let's see log account

**4:12:40** · confirm on git right so that's another thing um again there's a number of reasons to change different settings in here the main one that we still need to change though is how our actual allof templates are being used so if I go to log out here this is what it looks like it doesn't look anything like my other templates so that's absolutely something we want to adjust so we'll do that in just a moment um but the main thing is

**4:13:06** · we now have all of this configuration in place and then when we go to create a new account I want to actually go ahead and do that so I'm going to go ahead and do hungry pie gmail.com and I'll give a new username and then this time I'll go ahead and suggest a strong password directly from the arc browser Chrome or whatever um

**4:13:27** · and then I'll go ahead and hit sign up so what it should do is it should send an email directly to Hungry pie gmail.com or whatever email you put in there so this is where if you do have another email in my case I do I'm logged into hungry p email here we go we see that it's actually from the same location right so uh but we do see that Local Host is coming in here and I should be able to grab this URL and navigate over into that URL itself hit

**4:13:57** · enter and this should confirm that email address we'll go ahead and confirm it and now I can sign in with that user with that password as well and now I'm actually that user and then of course if I try to go into the admin it's not going to allow me because I'm not actually that user user so again we would have to change it back to CFE or whatever the user would be and we can actually verify all of these different users that are in here most importantly that hungry Pie is in there uh and that's actually the user itself with

**4:14:27** · that email and all of those good things and then our email address is in here notice that it's primary and verified so now individual users can also add additional emails and verify them and do all of the stuff that you need to do when it comes to that now before we actually can take a look at those things I need to modify how the Jango allof templates end up working so that it actually fits with the brand in the site uh that I've been working on although

**4:14:55** · it's not great it doesn't look perfect yet it's still long way from perfect but it actually is the direction of what I want the design to look like whereas the actual current login process isn't so we need to change that that's one of the big thing to do next

### User Email Verification with Django AllAuth

**4:15:14** · so with the configuration we have in Jango allo we decided that everyone needs to have an email address and I think this is true for you as a super user as well so that means all of our old users that we don't have email addresses on we want to go ahead and delete those users those are completely gone now the email address I have for my

**4:15:36** · super user is a real email address and I recommend you do the same but the thing is I might want to not go through the process of verifying this email address for my super user so we can do is go into email addresses here create a brand new one navigates to your super user put

**4:15:54** · in the email address that you have for that user and then just go ahead and verify it as primary as soon as you that do that you will not be prompted to verify this email address but the cool thing about this is if I do delete that verification from D Jango allo and log

**4:16:11** · out of the Jango admin then go back into the J allof login which of course is an accounts SL login and then attempt to log in oh let's try that again by going back here and logging back into our account

**4:16:27** · here hit log in what it's going to do this is true for anyone who hasn't verified their email yet it's going to say you need to go verify it which of course means you can check your email and verify it like we did with the user we created just now and a little bit ago uh but the idea being is I want to go back into the D Jango admin and I can actually verify it manually here as well so if for some reason the verification process isn't reaching your end user

**4:16:55** · they can send a message to your support team they can just come in and verify it manually if need be as well so this is another thing that's really nice if you were to onboard a user to your cess and you don't want them to go to the normal onboarding process you can just add them in as users and then verify their email for them and boom they should be ready to go and so with this in mind we can actually log out here and I'm going to go back into my project go into log in and then it just goes ahead and logs that user

### Better UI for Django AllAuth

**4:17:28** · in one of the downsides to using jeno allof or thirdparty packages in general is the fact they don't always look exactly the way you might want them to in this case we have a template that technically works but it doesn't look anything like the rest of my site even if the rest of my site is just barely different than this it still isn't the style that I want it to be in so the way we're going to solve this is by using a package called D Jango allof UI because

**4:17:54** · this one will make things look nice and I believe they also leverage Tailwind CSS so let's actually take a look at what that might be right now before we talk about how you can modify these things as UC see fit so first off we're going to go ahead and bring the requirements from here into our requirements and bring them in just like that okay and let's go ahead and open up

**4:18:20** · a new terminal window we'll do our pip install R requirements.txt close out that these other ones that I don't need server still running next up we'll go ahead and bring in some of these items into our installed apps so allof UI is one of them and let's go

**4:18:40** · ahead and bring it into here I'll put it at the top like it does I don't think that's necessary but I will do it as they did in their ducks and then we'll go ahead and put the next one at the bottom there okay so at some point we will have GitHub in here but I don't want to do that yet this is what should render out or something similar to this right which is great this is actually what I'd rather have it look like than what it did before this so the

**4:19:07** · server is still running let's take a look if I refresh in here this is already way better I could probably stop here and not have to do a whole lot more going forward but now I want to just show you how you might want to modify even this or reverse engineer things even further whether it's on the D Jango allof UI or D Jango allof itself like if we were to want to have the you know nav

**4:19:31** · bar up here for example what do we do and how do we bring that in so back in settings.py what we want to do is inside of templates here I'm going to go into my app do and just say false I'll save that so that when I go onto any given Jango allof URL I now get this you know template does not exist at account login

**4:19:53** · so how we find this could either be directly in the code for D Jango allof it could also directly be in the code for D Jango allof UI in this case the D Jango allof UI I think is overriding the default D jeno allo stuff so allo UI is what we're going to look at here we're going to jump in here we're going to go into templates we're going to go into account and then we're going to go ahead and go into login.

**4:20:16** · HTML so what we see is exactly the login HTML page that we might want one of the things that's interesting about this is it extends from account base so this might be the location we really want to change not all of these other things you may or may not know what's going on here I'm going to assume that we just don't know what's going on here I'm just making a minor change here you can expl explore and experiment as you see fit but I'm going to go into base.

**4:20:40** · HTML into account and this this is what I'm looking for this looks a lot like ours so I'm going to go ahead and copy this one back into my templates now and inside of a folder for account we'll go ahead and do base.

**4:20:56** · HTML we'll paste this in here and so far so good so if I save that and then let's go ahead and go back into our template does not exist of course it's still failing I want to bring it back back to what it was so let's go ahead and put our app being true once again we refresh in here the page is back to what we saw before so the next part of this is going into base. HTML and well emulating a lot of the things that we have from our base.

**4:21:24** · HTML now we also might go ahead and knock all of this out for just a moment and just do extends and base. HTML as in the root base. HTML let's see what that does if I refresh in here now sure enough it does render out my original page but it doesn't render out the form now so that's a little bit of a problem so there is a way to do that there is a way to do all sorts of modifications that would come in with that but instead I'm just going to modify a little bit with their base.

**4:21:54** · HTML because it's not a whole lot different than our actual base. HTML and you can decide later on how you go about doing these things now keep in mind this is just for logging in and signing up and only at this level it doesn't handle more advanced use cases but the first thing that I want to change is is this title tag here I want to put Dash sess or whatever project name I have so that there we go log sign in sess great next what I want to have is my actual CSS so in base.

**4:22:23** · HTML I'm going to go ahead actually let's first bring in our Navar I'm going to bring in that nav bar I'm going to put it right at the top where that body is refresh there's our nav bar so it's not quite right it's close but it's not quite there now it's a lot closer than it

**4:22:43** · would have been without our CSS so if I got rid of the CSS from here and refreshed now it looks a little bit more like you might expect with CSS missing I'm going to stick with their CSS at this point then I'm going to go ahead and bring in mine as well and I'll put it actually at the bottom of this I want this to be our default CSS so basically it overrides

**4:23:06** · whatever theirs is so putting our default in there means that it's going to look more like the rest of our web page than theirs per se so there we go there's our actual Navar it's looking a lot better if I actually change the ordering here we will see the ordering

**4:23:21** · actually have an effect on the rendering of that that actual nav bar which is pretty interesting now of course the next thing I've I will need to do is bring in you know Bas JS and that's something else I'll bring in and I'm going to put that right before the end body here and we save that and there we

**4:23:38** · go the nice thing about this is we now have better styling and once we add in the social authentication that should also be a little bit better than what we've got here as well now in the long run you're probably going to want to modify this quite a bit to better fit your brand so the nice thing about the Jango allo itself is what you can see is the actual input.

**4:23:56** · CSS if you are familiar with Tailwind you can really just copy this as your default input itself and then you basically don't use their CSS at all anymore so you could just get rid of that all together as you see fit so that's something else that's really cool about this particular package but in the long run you might do

**4:24:17** · a lot of modifications here and so you might even change how your form works you might change a lot of those things but at this point this is really I think going to be good enough for us and so I want to all I want to test here is that I can log in with my email this should be good and of course it's asking me that now one of the things that I did notice from my test which is probably just a little bug that will be uh fixed later but as soon as I go to the logout page I get this so this is a really good

**4:24:44** · sign or a good thing that we can look at because it actually is showing me two things one it's showing me General D Jango messages which are super easy to change and I actually want to bring them in in just a second but also have a bug here on actually loading this component this element here so this gives us the opportunity to go into the Jango off UI templates again and then we can go in and take a look at our log out.

**4:25:08** · HTML and we can see the error that's right there now by the time you're watching this this might not be an error anymore but the nice thing is I can actually modify this or copy this exact path so let's go ahead and do that and jump into account here and just do log out.

**4:25:25** · HTML I'm going to go ahead and copy that whole thing and we'll paste this in here I'm going to fix that little error save that and then we'll come back into our project here now it looks correct now one of the things that we noticed was that little message that was up there right below the nav bar that came from b.h HTML there's this if messages Clause

**4:25:50** · this right here this is something I actually want to have inside of bass so I'm going to go ahead and do Bas and we'll say messages. HTML and I'll quite literally copy this whole thing it actually looked somewhat what I would actually want it to look like so we'll put that in there and now I'll go ahead and do include and simply Bas SL messages.

**4:26:12** · HTML with messages equals to messages I'll explain that in just a second but now that I've got that I'm also going to put it on my base. HTML the first one that I created

**4:26:27** · in the same location so right underneath you know navbar HTML so with this Ami now I'll go ahead and refresh I'll sign out and then it says you sign out now we see that message in other places and so if I were to log in accounts and log in we can log in and now I should see

**4:26:49** · that same message great now those little messages are coming up because of the D Jango message Frameworks these are onetime notification messages pretty much from the system itself flash messages is another way to call it and that's how we are able to use this this is activated by default it comes with in

**4:27:08** · the installed apps middleware it also has Jano templates all of that stuff is what is responsible for showing those messages as you can actually see in the various places for those messages which is why in both places in the Jango allo we see the messages coming through on base.

**4:27:26** · HTML those are coming through here as well as here so in general you probably don't want to have a context variable for messages because Jango already has one so that's actually something that's fairly interesting as well feel free to read through the D jeno documentation for this these are really good one-off messages that just go to that single user that activates that message of some kind which is what we saw with the login log out process of those messages but the fact that Jango UI had it or the Jango all UI had it

**4:27:58** · made it really a good time to add it to the rest of our project uh because it just fits right in with everything and we'll probably revisit it again maybe in some form but at this point we now have a better UI for our login so so naturally we kind of have to update our navigation for this authentication portion uh to make sure that that's actually flowing better and so that our nav bar doesn't just look like some generic Navar

### Navbar Links for Auth

**4:28:27** · anymore now we need to improve our nav bar so the actual navigation on our site makes sense so we can actually log in and log out without app how to go to the actual pads themselves now the way we're going to do this is of course modify the nav .html so that the links actually work correctly so the logic behind this initially would be to go into n bar.

**4:28:50** · HTML and find all the links where they should go so the very first one for flowy this one I actually just don't want it to be flow bite anymore I want it to be simply our cess so it's a good time to change it to our own branding as well and then this URL I'm just going to have it go to our homepage so we save that we refresh in here cool now it's looking a little bit more like our own project Next Step what we want to do is find the next links so if I scroll down I just look for the anchor tag here with that href again and I can put in the

**4:29:21** · paths I want to put in so like in the case of login I can do slash login and I can change it from about to login and then we might as well put in sign up as well so we'll go ahead and say sign up and we'll put this in as SL register but

**4:29:39** · these paths may or may not be correct if I refresh it here I go to log in that seems to be correct I go to sign up that also seems to be correct but it's not using the actual J all off so those aren't correct that's not actually how we want to Define our paths it's really easy to make this mistake but it's also really easy that if you do change your paths that everything then breaks so

**4:30:04** · what we do instead is we use something called URL reversing we actually give our URL patterns a name so in the case of the home we just call this home simply home give it that name right in the URL pattern so then back in navb bar. HTML instead of using this slash here I can use curly brackets and then percent side URL percent side to close it off and then on the inside we just say home this right here then will render out the correct path to home and

**4:30:35** · you you can see that it's the correct path because well there's no errors if I called this I don't know Homer and refreshed I get this no reverse match found reverse for Homer not found Homer is not a valid view function or pattern name all this is saying is that in all of D Jango it can't find something named

**4:30:56** · Homer now it can so if I save that and refresh in here it will be able to show me that that it's actually working correctly naturally that's not what we want to do we want to leave it in as home that makes a lot more sense for our entire project and we want to put that in everywhere where where it sees fit so this is the best practice right here is using this URL reversing so there is the

**4:31:18** · python side of it and it's called D Jango URL reverse and the function itself is this reverse function this template tag is calling that reverse function if you ever needed to do it in Python directly uh there is a way to do that I mention it because some of you might actually want to do that at some point for your URLs but what we see here is URL home great that works fine now

**4:31:44** · what I want to do is the the actual login page what do I use for that well the way you can find this there's a couple different ways of how you can find it but you can go to accounts and then some gibberish and you can actually see all of the URL names here notice our homepage has a name of home we set that one Joo allo has all of these different ones now the way these things are named

**4:32:05** · are different for all packages each package kind of has its own way of doing things and there's a way to do something called name spacing which is more advanced than this but it adds another parameter that you would add into this but in our case we've got account login and so instead of SL login we would do URL and account login just like that and

**4:32:27** · then the same thing would be true for register we would come in and put whatever the register one is which is account sign up like that and then of course we probably would want to have one for log out as well so we come in here and we change this this to log out

**4:32:43** · now you could always refine all of these things like if you ever need to find what those URL name patterns are you can just look in the code in Django allo there's a way to actually go through it and you find the different URL settings that are in here there's some right here and then there's also some inside of the account folder itself you go into urls.py and you can see name equals to

**4:33:07** · sign up name equals to reauthenticate so I would recommend playing around with this if ever need to do something like a password change and you need that link somewhere on your templates which is something else that you definitely could do at some point but there's one more thing that we need to think about when it comes to our nav bar so if I refresh in here let's go and actually take a look at the nav bar I actually have log

**4:33:29** · in and log out on this NAB bar I shouldn't have both of those things I should only have one of those things like log in if I'm not logged in and log out if I'm not logged or if I am logged in so the way we're going to do do that is by using a template condition so we do if request. user. isauthenticated what do

**4:33:49** · you know there's that thing back then we put the log out in there otherwise we put log in and sign up both of those things actually make sense for this function here we save that we refresh and there we go we've got login sign up these things maybe we want them on the right here so what we could do is we could actually just cut out these links here or just remove them Al together and

**4:34:11** · I'm just going to move them up a little bit save that and refresh and there we go so now we've got log in and sign up you know perhaps you want log in at the very end so again you can kind of play around with how you do these things I'm going to go ahead and do exactly that save that and refresh log in now I can log in and there's my log out click on

**4:34:32** · that and now I can log out great so it's actually fairly straightforward but has a dramatic effect Auto navigation for this purpose right so for in for signing up um obviously these navigation Parts have the same sort of elements going on with them but it it at least allows us to navigate through our project quite a bit more now one of the things you'll notice is home stays Blue now this has to do with the classing of active or not

**4:35:01** · so something I'm not going to actually spend a lot of time on is changing those classes instead I'll just go ahead and grab this one paste it and change this to being home to where there is no highlighted class for the active page maybe that's something you want to do maybe not but that's just outside the realm of what we need to do at this point we now have better authentication overall better navigation overall it's time to actually bring in some Social account login so that we have that as

### Login with GitHub via Django AllAuth

**4:35:34** · well now we're going to go ahead and leverage Jango oloth to actually log into GitHub one of the many providers that D Jango Allo has in their social authentication package so to do this go into the docs go to social accounts here you're going to navigate down to Providers and you can obviously go through the list of providers here for ones that you might want go ahead and click on GitHub this is all we need to do it's actually really straightforward

**4:36:00** · so what I want to do is I want to make sure that this is available and we can actually use it on our own project so back in to our Django project here I'm going to copy the all off that Social account I'll do providers and then do GitHub and that's it so any other provider that you might want to use you just change GitHub to what that provider might be not quite sure why it's not on this code itself but that's how you go about doing it and of course if a provider is not there I think you can even build your own it's fairly straightforward to do if you're a little

**4:36:32** · bit more advanced in terms of your software development chops so with this in mind I now have GitHub as an option I'm going to go ahead and make sure I run migrations so py manop py migrate I don't think I'll need any migrations but in the case you might go ahead and make sure you do that now this of course assumed that you already did the allof Social account as well as this installation right here if you didn't do those things make sure you do them now otherwise the GitHub login just simply won't work so what I do want to have

**4:37:04** · also is if I scroll down into this social accounts providers here I want to bring in my GitHub account and I just want to add in the default of verified email so basically saying hey this email we can treat it as verified the one that comes through we'll just say that's true now you could add Scopes you could add other things in here as you see right here these Scopes are really useful if you need more than public data than read

**4:37:33** · access to public data so if you need a private repo from a specific user this scope part is what you would need to expand on that's outside the context of what we're doing here all we're doing here is using GitHub as an option to log into our service that's it but as soon as we do that we're going to go ahead and jump in to our D Jango admin so

**4:37:55** · let's go ahead and do that and into the social applications portion we're going to go ahead and create a new social application notice that GitHub is the only provider that's on here so what I'm going to do is I'm going to call this CF SAS Dev you'll probably have to call it something different because of GitHub so

**4:38:13** · now that we have some of the basics we need to get a client ID and a client secret so that the ooth can be configured and work correctly those are the main things that we need so how do we do this first off we jump into GitHub we can navigate into settings on our account inside of settings you scroll all the way down to developer settings and then inside here you've got your GitHub apps you can go ahead and create a brand new GitHub app so in my case I want to call it the CFE cess Dev app the homepage itself

**4:38:46** · is going to be http1 1270 .1 and maybe maybe we can put the port in there as well now notice that it is a local host Port the Callback URL itself is going to be that slac accounts SL GitHub SL login SL

**4:39:08** · callback with any other provider you just change GitHub to what it needs to be this is also inside of the actual docs as well here's that callback itself when you go into production you just change this portion to whatever your production URL would end up being and when you do that as well you'll register a new app specifically for production so that the homepage and call back all works based off of that as well so there

**4:39:38** · we go that's pretty much it now what I also consider doing is request user authentic authorization o off during the process so I'm going to go ahead and make sure I do that because I have a call back URL here and then I'm going to go ahead and take off the web hooks I don't need web hooks at this point you totally could have web hooks this is actually really nice for a little bit more advanced use cases um and then you also want to put any account on here so that anyone can use this app itself that

**4:40:06** · doesn't mean it's in its App Store that just means that anyone can use this account okay cool so so there we go now I've got my app created I've got a client ID here that I'm going to copy I'm going to bring this into my Jango app admin and then I'll go back in here and go into client secrets and just generate a new secret you can generate a new one whenever you need to this of course you want to keep secret where the client ID can be out there so here we go

**4:40:34** · now I have those things there save it and continue that should be all I need to do I'm going to go ahead and log out of the admin I'm going to go back into the homepage and then I'm going to go into login I'm going to click on GitHub here it's going to give me this warning I'll go ahead and hit continue and I should see this now if you don't see this what you might see is something like going into Local Host 8000 and then going into signin

**4:41:02** · GitHub this is obviously uh close to what we just saw I hit continue now I get this failure here right now the failure is actually not really that obvious so if we actually go back into our python application we can get what that failure might be by actually looking at the redirect or the error but what we can see is the error description in here it says the redirect URI must

**4:41:29** · match the registered callback URL for this application in other words it has to be exact it has to be exactly this call back from when you actually make the request to when it's coming back back that's far more important in production than what we see here but I'm going to go back into this and try it all over again with the correct URL go into login GitHub continue and sure

**4:41:54** · enough now it's actually trying to authorize this once it does it's going to redirect back to 1271 I'm going to go ahead and authorize this it's going to bring me back or in theory will bring me back there I am logged in as my GitHub user with my GitHub username let's go ahead and actually go into the admin now with our super user of course so we'll have to relog in what I want to see here is go into my users I see my new user here that's it right there I can click on it no password is set this user never

**4:42:26** · actually set a password they're going to log in through GitHub going forward they can set a password but right now they don't have one then we can see all of the other information and then we've got our email addresses in here and there we go it's primary and verified I didn't send it again it just happened automatically based off of that configuration now depending on how you configure Jango all off you could have it be sent again to just add additional layer of you know fully confirmation in

**4:42:56** · there but I think using certain providers a big part of the reason you wouldn't actually send your own verification email is because those providers probably already have one in the case of GitHub there's a really high likelihood that that email has already been verified by GitHub itself so that's

**4:43:14** · pretty cool but at this point we now have GitHub authentication now bringing this into production there's two things we really need to do we need to create a brand new app itself we need to have our production URL for that app and then we need to make sure it's configured basically the same way as we did in here

**4:43:32** · where it was basically the call back URL and all that so we've got our homepage URL which would be your production URL your callback URL would be your production callback URL with the same path on there as well and then also make sure you request user authorization in there as well because this process is known as all o off great GitHub is

**4:43:51** · pretty awesome it's cool that it does this now one of the things that you might also want to do is basically take away all other authentication if you're so interested you could just have GitHub on here I really like having both things whether it's GitHub or you know email and password I like having both options for all users and then of course that Jango allof UI just gave us this button just made things really really simple for us in that

### Password Protected Page with Django Sessions

**4:44:23** · context now we're moving into the section of permissions and authorization so once you have users what are they allowed to do is really the question we're going to answer here now one of the first things that you might do even before users is just a password protected page so let's take a look at how that's going to be done inside of CFE home under views I'm going to go ahead and create a new function for this

**4:44:47** · and we'll go ahead and just say pdb protected View and it's going to take in a request and it's going to be args and keyword ARS so the idea here is we want to return some sort of template as in we'll go ahead and do protected slash um you know entry.

**4:45:08** · HTML and then assuming that everything goes well we'll go ahead and say is allowed being false for the moment then we'll go ahead and say if is allowed then we'll go ahead and protected and view simple enough so the idea of course is how do we actually toggle this from being a reality now if you remember back to actually submitting form data from our first off views these ones up here

**4:45:36** · we are able to submit data this way so I'm going to go ahead and do something very similar to this and I'll just come in here and say if request method equals to post then we're going to go ahead and say um the user PW sent is equal to

**4:45:52** · something like you know code something like that right so we're going to go ahead and do a actual form that will submit whatever this is so we'll go ahead and just say valid code equals to abc123 and basically we'll then go and say if user pwent is equal to the valid

**4:46:14** · code then we can just change this toggle to something different so we'll just change it to being true great so let's go ahead and implement the actual uh templates and also the URLs for this so let's go ahead and do the entry template first inside of templates here we'll go ahead and add this one and it's going to be a lot like home.html so I'll just go ahead and copy that one and I'll get rid of block content here and we'll just go ahead and say H1 enter the password and

**4:46:47** · then I'll go ahead and do form and then we want to remember what the method is being post we want to have our csrf token because that's what you'll want to do on every form itself we'll want to have a button and this is going to be of

**4:47:04** · submit and we'll go ahead and say enter or let's just go ahead and do submit okay now of course we want an input of some kind so input type this time I'll go ahead and say password and I'll give it a name what is the name going to be we'll take a look at that in just a moment and then I'll go ahead and do a placeholder here and say enter the

**4:47:25** · code so hopefully that gives you an idea as to what it should be called but it's going to be called code based off of the logic in the view so go ahead and put that name in there cool so with this in mind I'll go ahead and duplicate this and make protected view we'll just go

**4:47:43** · ahead and create that one now and I'll grab this and say you are in and of course you can put whatever content you might want in here great you are in now with this in mind we'll go ahead and grab this View and we're going to bring it into CF homes URLs so let's go ahead and import it here and then I'll just go ahead and say path and protected and then adding in that view

**4:48:16** · great so with thisi let's go ahead and take a look at protected the actual user status doesn't matter so much right so if the user's logged in or not that doesn't matter enter the code or enter the password whatever abc123 hit submit you are in okay fantastic simple enough

**4:48:36** · but if I refresh let's see what I've got here if I go back to this page and then asks me for the code once again so this is where the part of sessions come in play regardless of whether or not they're the user we can use the request session so what I can do here is say request. session and then. get and then we'll say protected page allowed or zero

**4:49:10** · okay and so down here then what I want to do is I'm going to look this up down here I'll then set this and we'll do our request.

**4:49:20** · session and I'll put in the protected page allowed and I'll set that equal to one and then I'm going to go ahead and print out what that value is as well as the type of that

**4:49:36** · value and directly from the session itself okay cool so let's go ahead and take a look I refresh on this page I should see the print out of none and none type no surprise there cuz it's actually not in the session yet because this is where we actually set it in the session so let's go ahead and try this again with abc123 hit submit we're not going to save this and now I get a n type once again let's go ahead and refresh the page now I Get Ur in and I now get the

**4:50:08** · integer itself great so basically what I want here is I also probably want to set the is allow being to one in both places that way when you actually do submit it it doesn't need to be refreshed based off of the session itself but now this is actually showing me how I can do that the other nice thing about this is if I renate to this page I go somewhere else and then I go back to the protected page it is now

**4:50:35** · more or less allowed to go in and if I were to log out what this does is it it actually ends the session itself so then that actually removes the session variables that are associated to it and there are other ways to delete it but overall what we've got here is just a very simple way to have a protected page

**4:50:56** · but really this is not that secure of a view there's no user authentication that's built into this and realistically anyone that has this code will be able to access this view so it's not really that secure but it does highlight what permissions might look like we once you

**4:51:14** · have this code you then are allowed to do something on this particular page that's something can change based off of whatever you want whether it's in the template itself or you know the context that's coming through that might come from the database or something like that and of course you could think about this a little bit differently and change it from being code to being someone's email

**4:51:34** · address and then you can collect their email address then allow them to do some stuff in there and of course if you were to collect their email address you could save it into ajango model or you could actually send it off to some sort of email marketing service whether that's Loops MailChimp or whatever the idea being that this right here is a really simple way to see authorization after

**4:51:57** · they successfully submit the code or whatever they are now authorized to see this page right here it's a very simple way to do authorization and again it's not that secure but it is pretty interesting alt together so now that we've got this down let's go one step further and actually see a user required page in the way that J recommends for specific views

### User-required Pages via login\_required Decorator

**4:52:25** · themselves now we're going to take a look at a user required view now when we have this home view right here this is almost like user required but not quite this just renders out different context or could render out different context whether or not the user is is authenticated so that is not the same thing as what we're going to do now what we're going to do now is say basically this entire view means that you need to have a actual requested user come in now

**4:52:53** · one of the manual ways to do this would be to say if request. user. is authenticated or rather if it's not authenticated then we can return a redirect to log in right something along

**4:53:10** · those lines so this is actually what we're going to do but we're not going to do it in the actual function itself instead what we're going to do is using a built-in decorator for that exact purpose so The Decorator comes in from D Jango doc contrib do off. decorators we're going to import the login required decorator

**4:53:33** · this one is incredibly simple we just bring it to a function and then do at login required just like that there's not a whole lot more I need to show you really but we will implement it so we can see it in real time I'll come in here and go into my views

**4:53:51** · Imports we'll import our view and separate these things out just a little bit and then down in protected I'll go ahead and do uh another one for protected SL user only something like that and we'll go ahead and do our user only view save that and we'll go ahead

**4:54:09** · and take a look at this path so let's go ahead and open up our project and we'll go into the user only of it all notice that it's automatically trying to log me in if you were already logged in you would actually have seen that page but there's a big caveat the caveat is it's going to the standard D jeno login not surprising there next up it's going to go into the protected slash notice that

**4:54:34** · it has this URL parameter in here so if I were to log in what happens with Jango allaf is it's automatically going to redirect me to that page naturally that template does not exist so of course we can go ahead and create it and we could add in whatever data we might want in here as well so I'll go ahead and say uh

**4:54:55** · you are in dear user or something like that we refresh in here and there we go right so that's our protected page that works differently than the previous one where we actually enter some code into a form but of course this itself is far more useful we can put this anywhere now

**4:55:17** · this is just requiring login it's not requiring this user to be of a specific type or have specific permissions so this is not about authorization it's just about authentication that the user is logged in or not it's a Boolean value there so we can add one more layer which is saying hey not only is this user logged in but they are of a specific type let's take a look at how to do that

### Staff User Required

**4:55:46** · now I want to reiterate that this login required decorator is really just checking whether or not they're a user once they're a user they can see this page right it doesn't really give them permission beyond that but it does give a little bit of permission so I actually want to take a look at this login required on a user that has no permission as a user anymore so what I

**4:56:09** · do here is I'm going to sign in to that protected page and I'm going to go ahead and sign in as the hungry pie user and I'm just going to go ahead and put the password in and what I'll see here is this account is inactive right so the fact that this account is inactive is showing me something that I did in the admin your account is probably not going to be that same unless you did experiment with on your own so I'll go ahead and actually relog in as my super user navigate into my users here and I

**4:56:38** · go into hungry pi and and I see that the permission is not active anymore the actual user is not active so that actually has nothing to do with the page itself but rather the general authentication right so whether or not login is possible is not based on that

**4:56:56** · page itself it's based on the actual D Jango allo and the Django authentication system so what I want to do now is I want to change that hungry pie user to being active but of course I see this Boolean value of Staff status so I want to active but I want to verify this next level of permission on whether or not they are a staff user so to do that I'm going to go ahead and copy this one and we're going to change this to being our staff only view the actual template we

**4:57:23** · don't really need to change whatsoever but I want to go ahead and jump in and change The Decorator to the staff member required decorator which is a little bit different so it's going to be from jen.

**4:57:35** · contrib admin. views. decorators we're going to import the staff member required decorator and then I'll go ahead and bring that in down here so very similar to login requir decorator and in this login require we can also take a look at something like request.

**4:57:53** · user. issta so this is exactly like the request user is authenticated in many ways right so it's kind of the same sort of Boolean value that you might want to look at for another Baseline level of permission there is the is act uh active as well that's another one that would be related to the user itself um but the thing is we want to take a look at this is Staff portion now once we do that we're going to go ahead and bring in our URL for the staff only View

**4:58:28** · and I'll just copy this one here and we'll paste it below and there we go so I'll change this to staff only great so remember that hungry pie user is not staffed so I want to go ahead and make sure that I'm logged in to my project as that hungry pie user so let's go ah aead and do that and then we'll go into the protected not projected protected staff

**4:58:54** · only and hit enter what it does is it now tries me to log in to the D Jango admin now in many cases this might be fine you might be okay with logging in here and doing everything necessary to then be brought back to the front end outside of the admin but a lot of you are going to be like well I don't think I want to have someone accidentally stumble upon a staff member required page and well go into the Jango admin

**4:59:24** · especially if you deactivate this Jango admin you need to know how to actually change where the login can occur so what I'm going to do then is I'm going to come in here and I'll go ahead and do from jango.com we're going to import settings the reason for this is to get our login URL which is equal to settings. login URL just like that this

**4:59:47** · is a setting you can absolutely change in your main configuration if you wanted to and then I'm going to go ahead and come down here into staff member required and just go ahead and pass in the login URL equaling to this login URL you can do the same thing up here as well uh but overall the idea being that we can now modify where that login URL ends up being so let's go ahead and log out and I'll go ahead and go back into our protected step only now it goes back

**5:00:19** · into this and we see the redirect coming through I log in as my super user and of course I can see it if I were to change my hungry P user I'm going to go ahead and do that save here we'll log out and I'll come back into my protected view here just do a quick refresh once again it's trying to have me log in I'll log in as my hungry pie user and there we go so now I'm actually in a staff only page

**5:00:46** · and then of course if I go into the jeno admin I do not have permission to view or edit anything so this is really the next layer of permissions to actually give individual users permission to do certain things well in our case we're going to take a look at how this might affect a SAS application as to what they

**5:01:06** · can access and what they can't access yes you can do it in the Django admin as well and there's a lot of things that you can learn from just doing it in the Joo admin but in our case we want to do it in the front end we actually want to see certain things that are specific to the type of user that we are and so that's what we're going to work on

### User Profile View

**5:01:25** · now to explore D Jango user permissions we're going to go ahead and create a user profile view now in a SAS application you probably aren't going to spend a whole lot of time building out a user profile whether it's yourself or even the technical aspects of building out profiles but you might actually want to do them every once in a while the purpose of this next few parts is not to build out a profile but rather to explore how the actual permissions work inside of D Jango and where they might fall short in the case of what you want

**5:01:57** · to actually have access to or provide access to for any given user in our case this is really setting the foundation of a different user type based off of their billing situation based off of their subscription for our SAS application so to get here what we want to do is we want to build out a new app so let's go ahead and open up our project into the root of our Jango project with python manage.py start app and we're going to call it

**5:02:24** · profiles so inside of here we're going to do a couple of things once I add a new app like this I typically add it into my settings into installed apps so let's go ahead and do that now and we'll go ahead and do profiles great now next up what I'll do is I'm going to go ahead and come into profiles and I'm going to immediately create urls.py I'm going to copy url.

**5:02:47** · high from our main Jango project and then I'll paste them in just like that the main thing we need here is just simply path I don't necessarily need anything else so we'll go ahead and do that import get rid of all the comments and then I will go ahead and delete a bunch of them as well and we'll comment

**5:03:07** · this out okay great so we've got URL that are going to be right inside of profiles which means we'll also have views that are right inside of profiles so in this case I'll go ahead and do the profile view and it's going to take in a request args and keyword ARS for now all

**5:03:26** · I'm going to do is return HTTP response and this will just be hello there something along those lines so we go and do from Jango HTP we're going to import that HTTP response with this profile view since I want to have permissions I'm also going to require a user login so from D Jango contrib doo.

**5:03:50** · decorators import the login required decorator and we'll go ahead and add in this login required so with this view we're going to go ahead and bring it into our profiles views here so I'll just do from do import views this is a very common way to do it especially inside of apps themselves so we go ahe and do our path and this is going to be be simply views do and profile view so

**5:04:15** · we actually want it to be specific to the username that's coming through so I'll just pass in username here just like that we'll see what this does in just a second but before I can actually get there I want to go ahead and make sure that this is all routed up so let's go ahead and do that by jumping into our main configuration routes and I'll go ahead and copy we have include on here right so we did use include before what I will do is something similar to that but now I'll just do profiles and this is going to be include profiles.

**5:04:46** · URLs so yeah working closer to what you might do with thirdparty packages but now it's in our own package which is in this profiles right here so what we want to do is just check that this view is actually showing us something with this hello there that's it so let's go ahead and make sure that the server is still running sure enough it is we'll jump back in to to our project here and we'll do profiles CFE all I should see is hello there change profiles to ABC once

**5:05:18** · again hello there great so the next step of course is how do we actually get the username itself right so in our URLs for the profile view we had this argument here so what's happening with this is it's actually a string that's being considered here for the username and

**5:05:36** · that's actually being passed as a URL parameter in here which you could verify in the keyword arguments as well but now what we could do is actually just pass in that username whatever it might end up being and so if I refresh in here now I can see that username coming in this gives us a very Dynamic way to manage

**5:05:55** · different views themselves so it's just saying hello there username right there's not a whole lot that else we really would need to do here one of the things I will do though is actually build this towards something that's somewhat realistic so we'll go ahead and do from Jango contrib Doo we're going to import get user model and then I'll just go ahead say user equals to get user model and then I'll go ahead and grab the user itself and basically I want to do user.

**5:06:28** · objects. username equals to username okay simple enough and this is going to be the profile user object is equal to that and then I'll just go ahead do Dash profile user object. ID it's different than of course a request user so we can also think of this user as equal to request. user that's why I didn't call

**5:06:52** · this user because most of the time when you see the user the actual variable itself is related to the requested user not the one that's being looked up in the database so if we save it just like this and I do a Refresh on CFE no big deal but if I do it on a user that does not exist I get this exception so this exception is good it's showing us that in the database this user doesn't exist that's it but there's actually a better way to handle it inside of a view and that is by using git object or 404 so inside of this

**5:07:24** · shortcut here we can do basically the same thing but now I'll go ahead and do the profile user object equals to get object or 404 we pass in the actual user class itself or whatever model class we're doing and then we can pass in the arguments after that so we can save that and if I refresh in here now it just says page. found and no user matching given the query great so if I go back to

**5:07:55** · the CF user sure enough I see that user great then I can actually pass in what my user is so user.

**5:08:04** · ID and we refresh in here and now I see that this is basically the same user so once again I can say something like is me equaling to user object equaling to the requested user and we can bring that in as well there we go and of course I could go into the hungry Pi itself and we can see hungry is not one but hungry Pi should be one and there we go

**5:08:36** · so we've got a lot of different things that we could use with this s single condition but before I go much further what I really want to do here is I want to check that this user that I am actually has permission to view this stuff now the thing is our super user

**5:08:53** · that answer is going to be yes if it's a super user do they have permission the answer is yes if it's not a super user the answer is maybe because it's going to be up to you on how those permissions work so that's a big part of this on how

**5:09:08** · we're going to go through the idea of these permissions themselves and don't get me wrong we are not going to keep this htb response we will build it out a little bit more than what we've got here but this this right here gives us a lot of insight as to how to render out certain data how to check whether or not the requested user is the owner of that data or responsible for that data or similar to that data there's a lot of different things we could do just from here uh as far as the logic is concerned

**5:09:37** · let's move to the next part which is going to be very simple user permissions that are built in to jeno now we're going to take a look at user permissions in the D Jango admin first and then we'll move it over into our view now keep in mind permissions are about access like do they have access to do this thing it has nothing

### User Permissions and has\_perm

**5:10:00** · to do with whether or not that data belongs to that user right it might it might actually match with that user as we'll see it's just really the question of whether or not they have permission to do what they want to do using the Jango admin to start gives us an ability

**5:10:15** · to really quickly see what happens what the implications are when permissions are used correctly and when they're used incorrectly so in the Joo admin with my super user I'm going to go ahead and add some permissions into this hungry pie user the first one is Staff status we want to allow them to access the Jango admin the next thing is I'm going to go ahead and filter down to specifically

**5:10:38** · whether or not I can see user users so under authentication and authorization user can view user I'm going to go ahead and add that in and there we go one single permission for this user in the admin especially I'll go ahead and hit save and continue editing here then I'll go ahead and copy this actual URL into an incognito window the reason for this is so I can have two user sessions running at the same time as soon as I do that I'm going to go ahead and log in as my hungry pie user and I should be able to see this admin user this is my user

**5:11:10** · account but I have no access to changing it the hungry pie user cannot change this data so you might be like okay well cool I can see the data but I want to give this user the ability to edit the data so we go back into the other Jango admin where our super user is logged in now I'm going to go down into my user of

**5:11:31** · can change user data so I'll bring that in it can change and then I'll go ahead and hit save and continue editing then refresh into the hungry P user and what do you know I can now change it I can add in something like Justin in here and hit save and continue editing and I can do all sorts of things in here including changing permissions let's go ahead and see if I can do that I'll just go ahead and add one over for email confirmation for some reason and I'll hit save and continue and sure enough I can actually make those changes wow that's actually pretty cool but this is the downside

**5:12:04** · this is the potential problem with this value is I can now go in to other users and I could actually change things for them as well right I just remove something from that user hit save that permission is now gone so this is one of

**5:12:22** · the actual downsides to using the permissions when you grant too many permissions it might open up the floodgates as to what those users end up doing so granting those permissions need to be understood to the degree that you can test it in the djeno Adin and then you can test it other wise this can start to get really really complicated so what I often recommend that you do

**5:12:44** · especially in a SAS application is you don't necessarily touch the built-in D Jango admin permissions or the D Jango permissions but rather you start customizing your own and that's something we want to work towards in the long run but for now what I'm going to do is I'm actually going to take off all of the permissions for the user to change things and really just have the single permission to the user and that

**5:13:08** · is web whether or not they can view user data in here so I save that for that particular user I can refresh it here now all I can do is see user data great so with thisi let's see what this looks like inside of a view this is actually fairly straightforward but the question is how do we actually know what permission we can use so our requested user has the ability to do something like user. has perb so this is where we

**5:13:39** · can pass in a permission in here so the question of course is what are those permissions what are available to us from the get-go so the question is answered very simply we just jump into the Jango admin shell so python manage.py shell we're going to go ahead and do from Jango doc contrib doo.

**5:13:58** · models import the permission model this is again built into jeno and it is updated as you add more models so we can add in a query set of all of those permissions so permission.

**5:14:10** · objects.

**5:14:12** · all that I can iterate through each one so for obj and Qs I can print out what those permissions are and of course if I do just print out the obj the actual object itself these are the same exact list that we saw in the admin so in the

**5:14:28** · admin we see everything that's in here literally the same so you might be tempted to be like okay well I'm just going to go ahead and copy this and then in my view I'm going to go ahead and do something like that unfortunately that's not how it works it needs to be a little bit better designed than this so we can save that we can look at it uh let's go ahead and take a look at any given profile here I'm going to refresh on that view and what I'll see is true interesting well when it

**5:14:56** · comes to the admin user it always will be true the admin user the super user will always have access to things so if I refresh in here now now I should see false with the hungry pie user in that other session so we actually need the correct value here because in the admin if you remember we actually did set that they can view those users so what is the actual value it's not these strings here

**5:15:21** · so what I want to do is I actually want to come up to OBS uh the actual iteration and then I'm going to go ahead and do code name this is going to get a little bit closer to what we want we can see that we've got you know add session change session we can see the social stuff we can see hey what do you know View user so hey maybe that's it let's go ahead and try that one out I'm going to paste that in there I'll go back into my you know hungry Pi user authentication session I'll refresh in there and ah it still says false so I'm

**5:15:53** · going to go ahead and print out the actual item that I'm putting in here and the value itself refresh there again and that's the incorrect value okay so this actually makes a little bit of sense because the way this code name Works has to do with the model value itself so the way we actually find this is by doing not just the object name but object.

**5:16:18** · content type. apppp name and then we can take a look at all of the different app names the content type uh not app name rather app label and let's go ahead and run that again app label in here and this is closer to what we end up wanting to have so here's all of the app label ones we've got off. viw ususer I'll go ahead and bring this in here as off. view user

**5:16:49** · and then off view user just like that now I'll go ahead and refresh in here and we see that the value is true okay so this might be a little bit complicated but the idea here is we say app label do View underscore and then

**5:17:10** · this is going to be the model name okay so app label. view model name the other option here is going to be well we've got a few of them in here one is going to be add one is going to be change one is going to be delete all of these things are built in by default these are default permissions that Jango has that you can add to any given user and you would do it peac meal

**5:17:41** · at this point so every time you want to add a permission you would do it inside of that user specifically right now this user only has one single item of permission which is why it's able to see that thing to actually see these permission values if you look in the Jango authentication so using the authentication system and then you look for the default permissions you can see this exact same thing so if got fu.

**5:18:10** · addore that's saying the fu model view app name so we can try this again with visits okay so I'm going to go ahead and print out another one and it's going to be user has perm visits what is the app label let's go into the OR that's the app label right here what is going to be the actual model and that's page visit so come back in here and this time I'm going to go ahead and put page visit you put it all lowercased here just like that so visits view page visits so I'm

**5:18:43** · going to go ahead and save that and let's go ahead and refresh as our hungry pie user it should print out two things visits page visits is false no surprise there because we don't have that permission let's go back into the admin itself let's scroll to the bottom here's all of those page visits and then I'm going to go ahead and add view hit save and continue I'll go back into the Y hungry pie session refresh and now I can see that it says true great now once

**5:19:13** · again these are General permissions this means it can see all of the visits this particular user is getting inching closer to a super user that can see and do everything it has nothing to do with seeing the user's own visits this is

**5:19:30** · good and bad it depends on how you end up using this particular user so if you remember back we had this is me portion right so this is basically saying I could say something like if this is me then I can say oh well if I also have permission to view my page visits then I'm going to go ahead and grab what those things are with the page visit. objects. all or something along

**5:19:57** · those lines for now I'll just go ahead and say pass but the idea here is we can now chain together these permissions and we can use them how we see fit I will continue to refine this over the next few but the idea being on how we actually use this is going to be

**5:20:15** · something like this now the other part is we can Define our own permissions and that's something we would want want to do as well but before we get to defining our own permissions let's see how this shakes out inside of an actual template itself so we can adjust how that works as

### User Permissions in Django Templates

**5:20:35** · well now we're going to take a look at how to do permissions inside of J Dango templates it's fairly straightforward so let's go ahead and start off with our login required here as the profile list view we'll go ahead and create this one out and it's going to be our request and then it's going to return render the request we'll do profiles list.

**5:20:51** · HTML and then we'll go ahead and add in some context here the context itself will be just a dictionary we'll go ahead and put our object list here and we'll do a query set of user doobs doil filter active being true or

**5:21:11** · rather is active being true so that way we can actually see all of the users that are active inside of this query set so what we've got with this I'm going to go ahead and jump in to my URLs here and bring it in so we'll go ahead and just put in the path of an empty string here and it's going to be views. profile list view great so the idea now is to

**5:21:34** · actually build out this template what we'll do is go ahead and copy this and go into our templates and go ahead and create our profiles list view I'll copy home.html here and we'll paste it in all I want to do here is say something like users like that okay so we've got our users here and normally what we would do in this case would put a div and do something like for user in object

**5:22:06** · list and then and four now the reason we don't use user or users as actual you know context objects has to do with the fact that the request user is available so I'm going to go ahead and say for instance in object list and then I'll go ahead and bring in each instance that's in here so this will be just simply instance. username something like that and then of course we can actually have a a href going to their profile so we

**5:22:36** · can actually see their individual profile and that is going to be simply profiles SL instance.

**5:22:46** · username great so with thisi let's go ahead and make sure our server is running and we're actually able to check this out so in profiles with my hungry pie user I now see these two these three different users that are in here and I can click on them and take a look great so within the admin of my super user I

**5:23:06** · actually want to change my hungry pie user to not be able to see anything so I'll remove all permissions and we'll hit save and continue so back into our list here we see that this list is showing up which is fine at this point but what I really want to do is only iterate through this if the user has permission so the first thing to do is to check if perms do off if you remember off is the

**5:23:31** · app label so that's what we use there and then we put an if statement in there as well let's go ahead and put the div inside of that also and then I'm just going to go and tab things in so it's just a little bit more obvious as to what's going on great so if I do perms now it goes

**5:23:49** · away completely gone okay so let's go ahead and add a non-relevant perm or non-relevant permission and that is going to be let's say for instance add user okay non-relevant permission save and continue go back in refresh now those things are showing up so it's actually really nice that I can use perms anywhere so with this user using

**5:24:12** · perms will give all of those permissions for this user as we can see there right so if you are logged into a different user that is what those permissions will end up being and this comes in from the Jango context for templates so the O context here is providing that those values in there so back in here then if we've got perms off the next statement really would be if perms

**5:24:38** · off. viw user and then we would go ahead and say and if back in here we refresh sure enough gone right so they can't actually see the user so what we then say is something like else and you are not allowed to see this just like that great so the same

**5:25:07** · concept would probably be true for the individual profiles right so we're going to go ahead and do detail. HTML I'm going to go ahead and copy this whole thing into detail and instead of instance object list and rather users I'll go ahead and put in the instance.

**5:25:26** · username okay so we'll have to build this out of course so I'll put that username and then perms I'll go ahead and say something like down here instance. first name and maybe last name and maybe last

**5:25:44** · \[Applause\] login like that great great so in order for that to work we need to come back into here so profile view will now be our profile detail view I'm going to go ahead and get rid of some of these permissions that are written right on the actual view itself and then I'll go ahead and do a very similar context so let's go ahead and get rid of all that and we'll bring in the return render this is now going to just be simply detail and the object itself is going to

**5:26:17** · be this so we'll go ahead and say object is that we also might want to put in here as instance is that I'll explain that in just a moment next up is whether or not this is the owner in this case we'll just say is me but often you'll say something like owner like the owner user of the instance or the object so we'll leave it in as that's that so next up we've got our instance we've got all the same sort of things so once I go into something

**5:26:45** · like username let's go ahead and go into CFE here and let's go ahead oh yeah we need to actually make our view in our URLs let's go ahead and make sure that's the case there we go and we'll refresh in here now you are not allowed to see this great so now at the very least we can attempt to go to someone's detail and it's based off of the template now on what their actual permissions are so

**5:27:14** · what we also want to do though is if it is me then we do want to allow for those permissions so back into the detail um or is me or is me so CF user still can't see

**5:27:31** · hungry Pi not hungry but hungry Pi you are not allowed to see this still oops I changed it to owner let's try that again and there we go Okay cool so it doesn't have the usernames first or last name but it does have the last login which is great so it's now showing me that that part's working and we go back into CF user not allowed to see this let's go back into our admin here and we'll go ahead and remove this and then go ahead and add in the view

**5:28:05** · user save and continue we refreshing here now we can go ahead and see those users and we can see all of the other user profiles that are available here great so once again very very robust permissions but they also

**5:28:22** · Grant a lot of access that you may or may not want to have we could continue to improve this absolutely but the important part here is how we can actually use the template tags themselves on what permission this user ends up having and once again it's going to be the app label then the action underscore and then the model name as all lowercased right so we saw that before and now we are just seeing it again so that's using it in templates

**5:28:53** · traditionally speaking I would say using it in the view is probably the best option because if they don't have permission you could then just have a generic template that you render when they don't have permission to do something saying something like you're not allowed to see this or something like that where right here this is giving a lot of context it's actually doing a database lookup and all that and then it gets to the templat where we sort of make that decision so yeah typically speaking with your permissions I recommend doing them right in the view

**5:29:24** · unless you have a good reason otherwise so when it comes to like these different users you know perhaps you're admin user you want to have an edit function in the template itself and so you could then render a template form inside here and that might be just in the template for specific users so you kind of mix and match the things that you end up wanting to

### Groups & Group-level Permissions

**5:29:48** · do so most of the time when it comes to permissions I recommend that you leverage groups instead of actually adding permissions to the individual user sometimes you might want to give it to the individual user but most of the time you'll probably want to start thinking in terms of groups so I'm going to go ahead into this user here and I'm going to remove all permissions that they have and we'll hit save and continue verifying it with their session I'll go ahead and jump into a user profile and see basically just their username so what I want to do then is go

**5:30:18** · back into the Jango admin and I'm going to go ahead and call this group view users now this is a very generic group name on purpose because it's really going to hold one value one thing that it can actually do which is simply view users as we can see in here we can go ahead and add in the ability to view

**5:30:37** · users and we'll go ahead and hit save and continue editing and what we see here is now this group called view users so of course the question is how do we actually add users to this group well in the Jango admin it makes it really easy to do that you just grab any given user and then you grab the group that you want to bring them in and then you just add them to that group we hit save and continue notice that the user permissions themselves are completely empty but the group itself has permissions so now when I go to a profile and refresh once again it's back

**5:31:08** · I'm able to actually see that information it's really just that simple so what it goes beyond here is the thought process of like oh well can I take a group and say something like company a and then Company B and then company C and so on while technically you could probably do it that way this is not really what it's designed for we can add permissions later to other places but for now we're going to leave these groups to being a little bit more generic the generic being like your subscript levels for example so let's go

**5:31:40** · ahead and say basic plan right something like that and then we would do something else where it's like uh Pro Plan and then another one being like Advanced Pro Plan right and so each one itself is a different level that the user could be on we're not doing multi-tenant sass just yet that's a little bit more advanced multi-tenant means that individual companies can

**5:32:08** · manage their own users internally and have their data sort of grouped together if it needed to be uh that's not something we're going to do yet we're really just going to be focusing on having groups with these various plans but of course the question then is what actual permissions do we want to have for these various groups and how do we actually approach that process of managing users to being added and removed from this group maybe you have another plan in here like free plan or something like that where this view users one is not really that practical

**5:32:40** · it's not really that important to limit the users that was much more for showing uh you know the capabilities of just some Basics permissions so what we want to do now is actually work toward the process of having these different kinds of groups now the groups are going to be separate from the actual billing this is just going to be the technical ability to separate users into different groups

**5:33:04** · so their permissions are related to what that group has permissions to do versus what their billing status is we don't want those things to be conflated um ever really so let's go ahead and start the process of doing exactly this when it comes to user groups one of the nice features about it is you can actually access that group from your user directly so I go I can go ahead and say user groups equals to user. groups.

### Custom Permissions for Django Users

**5:33:34** · all that's a simple way to do that and then I can just print out my user groups like this now one thing I can also do and consider is I could say something like if the let's say user groups.

**5:33:46** · filter name I contains basic and then exists then I can return something like HTTP response and say congrats right so in other words I'm basically changing the content based off of the group that that user is in So within our change

**5:34:06** · user for this user we're going to go ahead and bring in the basic plan and I'll go ahead and hit save and continue the reason I brought in that basic plan was to make sure that this condition was true right so it contains basic so let's go ahead and take a look and refresh in here and there we go we've got congrats in there so I did a very basic Jango

**5:34:27** · query which is this right here and then I've got exists and I can also see all of the user groups this user is a part of now the logic here I think makes a lot of sense you're like oh if they're in this group then let's go ahead and do something for them let's change what they see let's change the access level that they might have now I think this logic is fine overall and it's something you might do from time to time but the thing is what if you decide that you want to change it from basic to uh you

**5:34:54** · know like starter uhoh now you have to go change your code and you have to do a lot of things related to that which is not ideal so this is definitely not a way that we want to filter things down or look at groups realistically what we want to do is we want to use the permissions instead but sometimes you might not want to use the default permissions the add change view delete

**5:35:18** · permissions you might want to see something different so let's actually see how the custom permissions can make a big difference in something like this so I'm going to go ahead and create a new custom permissions by navigating in we're going to do python manage.py start app and I'm going to call this subscriptions so the app name itself will be sub subscriptions and then inside of here we're going to go ahead and create a new model and it's going to be a subscription model and it's just going to be models. model and for now

**5:35:48** · all I'm going to do is put the name in here so we'll do models. charfield and we'll do max length being something like 120 then I'm going to go ahead and do class meta and do permissions equals to my own custom permissions here so the

**5:36:04** · custom permissions is going to be what you see fit in my case I'm going to have three different custom permissions now the idea here is for our actual plans like what we're going to be putting within our subscription so for example our basic plan well maybe the permission is Simply Basic the Pro Plan is pro and

**5:36:24** · then the advanced plan is simply Advanced and that's it so we can say Advanced perm and so on right we could just use that same concept so these labels here are really just based off of what we're going to end up storing So Pro perm and basic perm so the way we're going to access this is going to be subscriptions Dot and then

**5:36:48** · Advanced right so that's it so that's going to be the perm itself this is going to be subscriptions Pro and subscriptions basic that's it so now that we've got this let's go ahead and add this into our uh app installed apps so we'll come in here and we'll bring in our subscriptions right after profiles and we'll do subscriptions just like that so let's go ahead and run python manage.py make

**5:37:18** · migrations and then python manage.py migrate and there we go so what we should see in our migrations is related to those permissions as well there they are good so now what we want to do is we're going to use these permissions Within our groups let's go back into the Jango admin and let's take a look at our groups here basic plan if we scroll to

**5:37:45** · the bottom we should see these basic permissions so we add basic perm and then we can go to the next plan and do well something similar right so let's go back into the Pro Plan the Pro Plan should have probably the basic permission and the pro permissions so

**5:38:04** · now it has both of those permissions great go ahead and save and continue go into the advanced plan whatever that might end up being and now we can have advanced basic and pro all of those things on there and we hit save and continue now we have the makings of something pretty good in our views it's really going to be just that simple so now instead of having all of this in here we can just see whether or not the user we go ahead and print out user. has

**5:38:35** · perm and it's going to be something subscriptions. basic so if the actual group name changes the permission has not changed the permission is going to be the same so let's go ahead and print out all of these different permissions here and we'll go ahead and do basic Advanced and pro So Pro and

**5:38:59** · advanced maybe you call it Enterprise instead of advanced if if that makes it a little bit easier in your mind because Pro and advanced feel very similar but the idea here is does it have any of those permissions so if we refresh here onto this user we can see the print statement and we get true false false so now going back into our different groups here I can now add just another group let's say for instance we're going to do our basic 2025 plan and once again I

**5:39:30** · have this basic permission in here I'm going to go ahead and hit save and continue so this might be where you actually are going to go and do something different you're going to add a new permission that you might want to have on here so let's say for instance this is going to be now a new permission we'll go ahead and add it in and put a comma after here this is now going to be basic AI so the basic AI permission now

**5:39:56** · we just added a new permission in here we made some changes to the model so let's go ahead and make sure we migrate those changes so python manage.py make migrations and then python manage.py migrate Okay so we've got the basic AI permissions now we refresh in basic 2025

**5:40:18** · we scroll down basic AI permissions that's now in there save and continue now we can have some users with different tests so we've got a basic plan and then we can just add them into this new group of basic 2025 or whatever you call it save and continue now this user is going to have not only the basic access but also the basic AI access as well and then we can come in here and do something like basic AI just like that save it and let's go

**5:40:49** · ahead and see that print statement again refresh in here now I've got basic and basic AI the group itself doesn't matter doesn't matter how we name the group it doesn't matter if they're in the group all that matters is now we have these different permission tiers that we can use how we name them is completely up to us you know maybe basic AI is is

**5:41:07** · actually the Pro Plan that's going to be coming out soon and you can give people access to it or some basic access to it or you can even do a beta plan or something like that but generally speaking the idea here is these permissions are going to allow us to change the experience of our user based off of whatever we want to do with those

### Groups and Permissions within Subscriptions

**5:41:30** · permissions now we want to correlate our subscription model with the groups model as well as the permissions bottle yes we do have these custom permissions here but even if we just pretended like they weren't there how do we correlate all of those things and that's what we want to do right now so the first thing is we're going to have groups in here and this is going to be models.

**5:41:50** · Min to Mini Field and it's going to be literally the group model so to do that we'll do from Jango do contrib do off. models we're going to import group here and it's going to be just like that so this is going to be all available groups for any given subscription so we'll go ahead and save this I'm also going to go ahead and bring this into the admin so we'll do from. models import the subscription and

**5:42:17** · then admin. site. register of that subscription so we'll go a and save that and we'll run our migration so python manage.py make migrations and then python manage.py migrate great so with this in mind we'll go into the J admin and we'll see subscriptions in here now now we can add a new subscription and let's go go ahead and call this our uh you know our beginner plan or starter so not quite

**5:42:46** · the same name as the groups but in the starter plan we hit save and continue here notice it says this field is required in this case I think it actually makes sense to make this field required so I'm going to go ahead and say my basic and my basic 2025 both groups are now a part of this starter plan so the idea here is not to really manage the groups the idea is to connect the subscription whatever it ends up being with the groups themselves right

**5:43:14** · but the other part of this is to make sure that that same subscription has specific permissions that are then also selected now as well so in other words when we start to build out our subscriptions we might have a bunch of them as soon as we start building them out we want to make sure that they are correlated to a group as well as the permissions that that group should have for those subscriptions so this means that when we go to a group for example this basic plan here what if I accidentally removed

**5:43:45** · that permission that's certainly possible now I have no real way to know what permissions were available for any given group because I don't have any traction or tracking of it so obviously this one's fairly straightforward because basic and basic but the idea is

**5:44:03** · we don't want to leave that to chance we want to make sure that what whatever the user is paying for those groups are correlated yet another way as well as the permissions for those groups or at least the basic permissions for those groups that those are available as well so the next part of this is then adding in permissions in here so I'll go ahead and add in the permission model and now permissions equals to models and Mini Mini

**5:44:34** · Field permission great right and so once again we want these to be required so I'm going to leave them as is and then we'll go ahead and run our migrations make migrations and then migrate so now we actually see all of the potential permissions that there are and that's not really what I want I actually want just these you know Advanced basic and all that so there's a few different ways of how we can think about doing this one of the ways I'm going to do it is in this limit choices 2 option here and we

**5:45:06** · can pass in a dictionary for the different choices we want in our case we're going to go ahead and limit the content type app label and we want that to be equal to subscriptions so quite literally the same exact thing that's going down down here so if we save that and then refresh in the admin what we should see is just those few subscriptions that are in there so that might be how we want to go about doing it or we could go further than that and go ahead and say that it's

**5:45:38** · just these permissions right here and so to do that we would say uh code name I contains and then we can set the code name I contains let's say for instance basic so we save that and then we refresh in here this time it'll just show me those two basic parameters just like that and so we could obviously Advance this quite a bit or code name and then we can say in and we'll do B basic and

**5:46:11** · advanced and pro okay so now we can refresh in here and then there we go now I've got the basic permissions that are in there um and of course if I wanted basic AI as well we can add that one in in as well so as we tend to advance these permissions maybe we want them listed in two place so I'm going to go ahead and say the the um you know sub subscription

**5:46:41** · permissions so let's go ahead and add that in as subscription permissions I'll literally cut this out here paste this here and bring this up like that so that at the very least what I could do then is code name in and then just grabbing all of those code name values which will be X subz

**5:47:07** · 4X in sub uh subscription permissions just like that and we can separate these things out just a little bit so it's easier to see what's going on with these limited choices here and then I'll go

**5:47:23** · ahead and refresh in here and now it should give me all of those permissions that are related to subscription level permissions and so now the starter plan we can then come in here and say that's the Baseline level of what we want to do once again the group names don't matter so much the permission names even the labels for them don't matter so much it's really what's behind those permissions that make a difference so we did make a bunch of changes to the model so I'm going to go ahead and run python manage.py make migrations again and then python

**5:47:54** · manage.py migrate perfect so the idea here is what we will still need to advance is we need to turn every subscription that we might have ensure that the group has the permissions that are on there I actually can do this a number of different ways what I want to do is actually delay it a little bit so what the value in here is

**5:48:18** · going to be is going to be probably different or potentially different than what's in the group directly so in other words if I went ahead and hit save and add another one and set the Pro Plan I would then add it to the group and then add the permission and hit save that value would not change until I actually

**5:48:36** · ran another command a jeno management command to make sure that those things are coming through and they're all synced up I'll explain why in just a little bit but the idea here is this is mostly metadata it's not actually managing the permissions or the groups themselves but rather just making sure that all of these things are tracked in some form so let's actually see how we can then bring them together to make sure that the groups um the actual groups that are matched in any given subscription matches the same permissions also in that

### Syncing Subscription Groups and Permissions

**5:49:10** · subscription since we're going to be building our SAS application around the idea of user permissions we need to make sure that those permissions the groups related to them are always in sync they're always correct in other words if we were to go into one of the groups and

**5:49:27** · let's say for instance the basic plan and then we just removed one of those permissions we want to have a way where it automatically heals itself it automatically comes back and and it is tracked as well that was the motivation behind having the subscription model in the first place but this is now how we're going to heal it the way we're going to heal it is by a custom management command so go into Commando here copy the management folder and let's just bring it into subscriptions and then I'm going to go ahead and delete the vendor poll here I will also

**5:49:58** · delete the cach folders in here as well because we don't need them so this hello world here I'm going to go ahead and just call this sync Subs as in sync subscriptions so that we can actually handle this as we see fit so the idea here is we're going to go ahead and bring in our subscription model so from subscriptions.

**5:50:16** · Models we're going to go ahead and import the subscription class here so the idea then is query set equals to subscription. objects. all right away I might be like okay do I want to make sure that I have something like active being models. booleanfield uh default being true yes I actually

**5:50:39** · want to make sure that I have this subscription as being active so that when I go to sync them they are syncing correctly so right off the bat I'll go ahead and do make migrations and then python manage.py migrate okay good so with this in mind I'll go back into my sync subs and I'll just filter this down being active being true great so now we'll go ahead and do

**5:51:03** · for obj in Qs we're going to print out obj dogr \[Music\] doall and then we'll print out obj permissions. all both of those things should yield some sort of values in here as we will see right now so the way this works is of course if we do python manage.py we should see the sync Subs

**5:51:28** · command in here and now if I run sync Subs I should see the groups and then the permissions Associated to it that's it so this is where I can now run through each one of these subscriptions or rather the groups in them and then make sure that my permissions are set on there so that's what I'll do so for group in group. objects. all I'll then go ahead and say for perm in object.

**5:51:58** · permissions.

**5:52:01** · all then I'll go ahead and do group.

**5:52:05** · permissions do add the per and that's it okay so we don't need to print everything out I'll leave those things out and let's go ahead and run sync Subs

**5:52:21** · okay so it seems like it works let's go ahead and give this shot basic plan here notice that it gave both of these permissions in here now I'm going to remove all of them hit save and continue editing run it again and just do a quick ref ref fresh in here once again they're in there so now we're at least a lot closer to what it should be so the other

**5:52:44** · thing is what if I added additional permissions in the group so say for instance I wanted to add in the advanced permission and I hit save and continue in here so the basic plan now accidentally has the advanced permission if I run this again and I refresh in

**5:53:01** · here it still has that advanced permission so this is where you're going to want to think about how are we going to handle this actual command are we going to always have all permissions like the subscription permissions should they always match the group permissions as well and so this is going to be a little bit tricky and one thing to really think about so how do we do that this means that group.

**5:53:28** · permissions can also be set to the actual permissions from the subscription itself so I'm going to go ahead and to sub perms equals to this right

**5:53:43** · here and that then will go based off of those permissions we save it and then it's going to go ahead and refresh in here now if I refresh the advanced one goes away so this basically takes away the management from here so it's going to be up to you on how you want to go about doing that in my case I'm going to have my subscription model being in charge of making sure that those permissions work correctly but I'm going to have this done in a delay as in this

**5:54:10** · sync Subs is not going to happen right away it's going to happen over time I'm assuming that I won't have to do this very often but in the cases that I do need to do it I can just run it really quickly and make sure that all of my groups and their different plans are updated as they need to be and so that's

**5:54:29** · going to also depend on how I run these different subscriptions right so going back into the Pro Plan here's the pro Pro Plan going back into the basic plan here's that starter plan and then if I go into advanced or Enterprise I can just say that it's the advanced Pro Plan and then it has all of those permissions and then we're going to go ahead and hit save and continue and then maybe back into our actual Pro Plan we

**5:54:55** · want to make sure that it is all of these permissions except for advanced and then we hit save and continue and then now when I do that sync it's going to go ahead and make sure that that the users that are on these different plans will have those different permissions uh like we had set up already there's an advanced plan then our Pro Plan and so

**5:55:18** · on great so now that we have the ability to manage those plans we have the ability to sync them we need the ability to move the users based off of what subscription that they actually have themselves users will have one subscription per user they're not going to have multiple just one subscriptions themselves can have a little bit more uh you know generic feeling now the thing here is groups themselves you might also

**5:55:46** · think of this as potentially being a one two one we will see what this kind of looks like with our users when we put them as a onetoone because maybe you only want your subscription to have access to one single group so it's really going to be up to you on how you go about doing that and of course in any given subscription let's say for instance you want to have that beta testing and you don't want everyone in the starter uh you know plan to have access to the basic group you could just change it to where it's like this it's

**5:56:17** · just basic basic we hit save and continue then when you do the syncs it's not going to actually touch the groups that you have that are a little bit more manual and something that you're just testing and so there's a lot of things that you could do as far as playing that out uh but the point is that we have the flexibility to do it as we see fit

### Sync User Subscription with the User Group Part 1

**5:56:39** · now we're going to correlate users to subscriptions so the way this is going to be done is we're going to do from jango.com we're going to import settings and we're going to go ahead and do our user equals to settings. off user model which ends up being the string of just simply off. user by default but this is far more flexible when you need to change the user model sometime in the future if you ever need to but that's not the point here okay so with this in mind I'm going to go ahead and now come down and say class user

**5:57:12** · subscription and it's going to be models. model and the user is going to be simply equal to models. one to1 field once again a user and then we'll go ahead and do on delete equals to models.

**5:57:27** · Cascade so all this means is when the users deleted their subscriptions are deleted as well and so the next part of course is going to be the actual subscription which is going to be related to that model so we'll do subscription equals to models do uh you know foreign key and the subscription is going to be this right here that's going to be the foreign key itself and then I'll go ahead and say on delete for this one being models. set

**5:57:57** · null and then I can also say null equals to true and blank equals to true in other words the user does not have to have a subscription if they have one great if they don't have one that's okay too okay and then the next thing is maybe you have something like active and that's models.

**5:58:13** · Boolean field default being true great so we might have to modify this in the future that's not so much the point right now the main thing is that we have some of the fundamentals down so I'll go ahead and save this and we'll run our python manage.py make migrations and then python manage.py migrate

**5:58:38** · okay and so with this in mind I'll go into the admin we'll bring this one in as well and then admin. site. register of that user subscription okay so let's go ahead and take a look at the admin and we've got user subscriptions now I'm going to go ahead and add one for our hungry pie user they are going to be one of these subscription objects this is not great so let's go ahead and change this from saying subscription objects to having the Str Str class defined and it's just

**5:59:10** · going to return to self. name and we'll go ahead and put it into a string because it is going to be a string once we do that I will run migrations in a moment but here's the different plan options that's much better okay hungry piie and then we'll go ahead and do starter plan we'll hit save and continue editing and we'll take a look so as soon as the user goes into a new subscription the user should be added to thatp the

**5:59:39** · groups that are related to that and so the best way to check this is by going into the user directly and see what groups they are a part of right so right now it shows both of those groups which is fine but once again we are faced with how are we going to run this portion so there's a different there's a couple different ways on how we can do this one of the ways is by using the D Jango model signals so from django.db

**6:00:08** · models. signals we're going to import the post saave signal and so the post save signal is going to be based off of when the user subscription is changed and then grabbing the groups for that user subscription so in other words we're going to define the user sub post

**6:00:28** · save signal it's going to take in the sender the instance and then ARs and keyword ARS so the instance itself is going to be the user sub instance so we'll go ahead and say user sub instance and that's going to be equal to that instance and what we want of course is usersub instance. subscription so that's going to now be our actual subscription object as in one of these and we want to

**6:00:57** · grab what that subscription object is going to be more specifically the groups so the groups Associated are subscription object. groups. all great straight very very straightforward so the next thing is our actual user so user is going to be equal to the user sub instance. user that right there so

**6:01:20** · now all we need to do is take the Django user model which has groups in there by default and then I can do do set and then pass in groups this will allow me to then set those user groups based off of this user subscription there's a problem with this setup but we will fix it in a moment then we're going to go ahead and bring this in with post save.

**6:01:41** · connect and that's going to be grabbing this user post save here and then the sender being the actual user subscription model to make sure that all of this is all set up correctly okay so let's go ahead and make sure that everything's running correctly I'll go into my user subscription here I'm going to change it to Enterprise and we'll just go ahead and hit save once that's done let's jump into the user model themselves go into hungry piie and what

**6:02:08** · we'll see is our groups are now in there but the thing is what if I accidentally were to want to add a different group let's go ahead and just create a custom group in here and I'll just call this something like custom group and we'll hit save and continue and add whatever permissions we want then going back into our user subscription here if I were to go ahead and change this hit save and continue what's going to end up happening is that specific user um might

**6:02:36** · be removed from that group more than likely they would be removed from that group when we do make those changes right so even if you did change it or not the idea being this is maybe a little flawed with how it's managing the groups themselves so we're going to need to change this in just a second but we just wanted to see that process happen great so let's go ahead and see what we can do

### Sync User Subscription with the User Group Part 2

**6:03:01** · now now the logic here gets a little bit tricky so what I want do first is say something like allow custom groups and I'll go ahead and say true so if allow custom groups is not

**6:03:17** · true if not allow custom groups then we'll just go based off of that otherwise we're going to have to do a few things in here that might get a little complicated on how it ends up working so the way this works is the using python set so if we jump into python here and I did something like AB or the let's do groups equals to 1 2 and 3 so those are representative of the actual IDs themselves and then we'll do groups b equals to 3 4 5 right so if we

**6:03:51** · were to change these into sets then we can actually save it and use it a little bit differently so we've got groups in here it's now a set and if I did groups B in here as a set as well we would would then be able to do stuff like groups minus groups B and there is the

**6:04:11** · new value that's in there we could also do something for a union as in bringing them together and then see all of the available groups that you possibly could have so getting to this point is what we could do now now the first thing is to know is as soon as you want to actually use group IDs you can do that so we can say groups IDs is equal to those groups values list and just simply ID we can

**6:04:38** · say flat being true what this will do is give us all of the IDS as a list so say for instance it would be one two and three and so on and then we can now set it just like that so what would happen then is this would just go based off of the subscription and it's going to set this user to only those IDs so what we want to do then is we want to say maybe for instance my current groups is equal to user. groups

**6:05:07** · all and that would give me my current groups once again I can use this values list here and grab all of those IDs and so what I could do then is of course combine these two things which we will in a moment but the idea being is if I do group IDs as a set then I can do the

**6:05:26** · union of them so the set is this and then group current group set is equal to that and then our actual Union or the final group IDs is equal to the list of the two sets

**6:05:43** · in a union and basically just converting them like that and then this is this right here it's saying almost the same thing as this but it's now adding in those current groups which means it's not going to remove any groups that's actually the reason we have sets in here is to be able to remove some of the groups so the way we can remove some of the groups is by getting the subscription groups so first off I'll do my Subs Qs equals to subscription to

**6:06:13** · objects. all realistically it probably be filter active being true right whatever the active groups are now this is the active subscriptions not the active groups from those subscriptions so now I can do SUB Subs groups equals to all of these and then I

**6:06:33** · can do values list now I can actually do groups here or I can do all of the IDS from those groups with this two underscore and this is going to be flat being true these are going to be group IDs much like we saw down here and of course if I change this to subgroups set

**6:06:50** · I would just turn the original subgroups into a set just like that so this is all of them right what it's not taken into account for is the newest one the one that I just changed so I can actually filter this down even more by excluding a value value and I can say ID equals to this subscription objects.

**6:07:08** · ID once again if you're feeling a little bit overwhelmed about this yeah it's a little bit complicated to get this working in this way but it's important to see that it can be done okay so now this is going to be all of the subscription group ID set except for the

**6:07:27** · current one the one that's being used in this value and so what I can do then is in my current groups here I can remove this value so this current group set I'll I'll go ahead and say that it's the current groups minus so minus the subgroups so this is

**6:07:47** · now going to be my my like current groups or the almost ready groups then we get our final ID which includes what the current one were minus any of the old subscription groups that are in there and then we can go ahead and set that and then we can just give this a try as well let's make sure our server is running still so we go back into the admin here and we've got our custom

**6:08:09** · group with our Pro Plan let's go back into the subscription for that and we'll change it to Enterprise what we should not see is that Pro Plan but rather the advanced one we hit save let's go ahead and jump back to our user here that custom group is still in there and so is that advanced Pro Plan and so that's really what we want to do that's like a little bit more advanced but it's far more effective so that we can still use groups as they were designed it's not really changing everything to subscriptions but it's kind of mixing the two as it should be and so the other

**6:08:42** · part about this is the fact that if you were to put custom group into one of the subscriptions groups right so if we came in here and I were to start adding Enterprise now has the custom group in here that would then change everything of course this is now a actual subscription based group itself so that

**6:09:04** · also is pretty interesting as well uh but overall this allows me to then move my users around and sync with the current subscription that they have um and all of the permissions that might come with it uh which I think is fairly important so the other part about this the reason I want this method versus having the subscriptions and groups being perfectly tied basically the

**6:09:27** · simple method the reason for that of course is when I go into my users and let's say for instance this user I want to give them a TR plan so that custom group is actually a trial plan a full plan because I'm trying to sell them on this Advanced plan and so maybe they don't have that yet right so if I come back into my subscriptions here and put it being nothing we get an error here none type has groups so we've got a little bit of a problem with this here so basically we want to go ahead and say

**6:09:57** · that we're going to just change it just slightly to make sure that we can account for no subscription it's good thing that this happened but we'll go ahead and say group grou uh groups IDs equals to this empty and we'll go ahead and say if subscription object is not

**6:10:13** · none they will go ahead and grab those groups and then will go ahead and grab the group IDs being equal to groups and values list so just like what we saw uh down here okay and there's our IDs now and so I

**6:10:30** · don't need to do it twice I'll just do it this one time and so down here I'll set those group IDs good so that should work now so let's go ahead and refresh in here continue and we get n type has attribute ID so let's see for instance why oh yeah so we don't we can't actually exclude this because there is no subscription so once again we'll go ahead and say if subscription object is not none then

**6:10:59** · we'll go ahead and do SUB Qs equals to sub qs. exclude there we go let's refresh that again and now there we go so we've got no subscription let's go back into our users let's take a look at hungry pie just a custom group great

**6:11:18** · let's try that again by adding in something beyond the custom group like Enterprise we hit save we go back into this user hungry pie there's the advanced one let's change it back to being basic or something else starter save and user back there let's take a

**6:11:38** · look custom group is still there so yeah that I think that's actually fairly important for managing how a user might fit in with all these groups and all of the permissions that are associated to it notice that this has nothing to do with permissions themselves we are not setting the permissions on the user directly we're only setting them in the groups and therefore this this like sort of advanced like use of all of these

**6:12:06** · different groups becomes more and more important so yeah if you have any questions on this let me know this is fairly important to get you could always copy the code itself I realize that if you're brand new to jeno you're going to be so lost with these set and and set

**6:12:22** · all over the place these sets here the sets here um but overall this is how you would actually handle it uh in in terms of setting any sort of mini to Mini Field uh which is what we've been doing right so got these mini to mini fields that are in here and of course users and groups are quite literally mini to mini Fields as

### Getting Started with Stripe

**6:12:45** · well now we're going to go ahead and take a look at how to do subscriptions with stripe and D jeno the idea here is some sort of reoccurring transaction an actual financial transaction that will change their user group and of course their permissions inside of D jeno now if you wanted to do oneof purchases you

**6:13:04** · could actually take a look at my micro e-commerce with python course because it covers oneoff purchases to purchase products within stripe but the concept still works really really similarly to what we're doing here but with reoccurring subscriptions we need to do a number of things to make sure that those subscriptions are still active so the users have the correct permissions based off of their financial status and our policies in place so these are going

**6:13:31** · to be things that you'll want to continue to refine this setion is all about just getting it up and going at least at a fundamental level because the stripe API is really powerful and there's a lot of things you can do with it so we're really kind of scratching the surface there at this point you're going to want to sign up for stripe so go to stripe.com and then you'll go into your dashboard it's probably going to look very similar to this in some sort of test mode basically I can't get

**6:13:56** · actual Financial transactions here to do that I need to create a business profile so even if you don't intend to have a business profile anytime soon you're going to learn a lot of stuff on how the transaction part works so keep that in mind as you go forward now what we're going to do also is we're going to go into docs. stripe.com and we'll go into

**6:14:16** · API right here and so we're going to go off of the stripe API make sure you select the python library because this is the one we're going to be using when it comes to integrating our project so let's go ahead and add this into our requirements so in requirements.txt we'll bring this in and we'll just do our pip install d r requirements.txt

**6:14:40** · okay next up what we want to do is take a look at an example so I'm going to go into customers here and the next part will actually implement this with Jango but the idea is you'll see this all of the time where it's importing stripe it configures the API key and then it makes some sort of API call so in other words

**6:14:56** · if we were to open up a python you know file this is essentially what it's going to end up looking like but the thing is when it comes to API keys I want to be very deliberate on how I'm going to design those things and how I'm going to end up working with them so I'm not going to put the stripe API call like this instead I'm going to make one dedicated module for this so inside of helpers here I'm going to go ahead and create a module called billing. py This

**6:15:22** · is where I'm going to go ahead and put all of the related API keys and API calls to stripe this keeps it all in one place so it's a lot easier to make changes to the API as it needs to but it also makes it a lot more simple for us to just call different things and then of course at some point if we wanted to move away from stripe then we would just need to implement a lot of the same sort of methods because the ideas behind it

**6:15:48** · are separate from the implementation of it on how stripe ends up working so keep that in mind as we go forward now what we see here is this API key where did that come from well of course it's in the docs it's already enriched in the docs assuming you're logged in but where you can get it is in the dashboard so if we go back into the dashboard itself and then we navigate into the developer section of that D dashboard we can go into API Keys here and grab this key we

**6:16:15** · can also roll these Keys whenever we need to like we can say it's expired right now roll an API key and then boom we've got a brand new one here so of course once we have that API key we'll put it into our EnV here and then I'll go ahead and call this my stripe and it's going to be secret key and it'll just be equal to that now I want to point out something about the test secret Keys is they start just like this skore test all of them do so that's

**6:16:45** · actually important to note because well if we're in debug mode we want to say oh yeah we want to make sure that the test key is in there if we're not in debug mode we want to raise an error if it is in there thus another reason to have one single module for this so let's go ahead and implement this now the way I'm going to do this is by using decouple directly so from decouple import config I'm actually going to use the environment variables in here for two reasons the decouple we'll bring in that the Jango

**6:17:16** · debug the default being false and we'll cast it as a Boolean value just like on our Jango module and then our stripe secret key we'll bring that in as well default being n okay and actually

**6:17:33** · we will put the default being an empty string and then we'll cast it as a string okay so the idea here goes back to this SK test thing right here so basically I want to see if SK test in the secret key and not debug as in debug is false then I'm going to go ahead and raise a value error saying that invalid

**6:18:01** · stripe key for prod that's it so with this inite I'll go ahead and bring in the stripe key now and I will run this in just a second but the idea being we now have some configuration related to this billing module itself great so with this in mind

**6:18:21** · I will now go into my Jango project we'll CD into the SRC here and I'll run python manage.py shell and then we're going to go ahead and import helpers or well we'll go ahead and just say um from helpers decouple or rather helpers

**6:18:37** · billing import all okay so that should give us the stripe API key so if we look at that secret key I should be able to see it now because I imported everything and then of course if we wanted to make a customer here just like the documentation said I can just do that and there is my customer response now we'll come back to this later uh but all I wanted to do now was change the environment variable a little bit so I'll change it to zero I'm going to go ahead and refresh my terminal session here we'll CD into SRC we'll do python

**6:19:09** · manage.py shell and then we'll go from uh helpers billing and import all and there we go invalid stripe key for prod great so there's going to be a bigger discussion on the test key and the production key later when we actually

**6:19:28** · build out more production related systems to this uh but for now I just wanted to get this ball rolling so the next part what we actually want to do is integrate the customer we want to actually build out the customer so it's going to be something like create customer and then we want to have various arguments that are going to come in through

### Django Customer Model

**6:19:52** · there all right so bringing the D Jango debug to being one once again we are now going to go ahead and create a place to store all of our D Jango users as stripe customers so in other words when we actually created that little early days

**6:20:08** · of the helper function to create a customer we want to be able to store some of this data now I actually did create a customer on that API call so if you go into the stripe dashboard you'll see Jenny Rosen in here and it has related customer details now if you were to dive into all of the documentation which I do recommend you do you will see that the customer ID this right here is unique so every time you reference that customer customer ID it's going to reference this instance of that customer

**6:20:38** · so what I want to do then is I want to tie that customer ID with a specific user an actual user on our project on our SAS project so that's what we're going to do now so we'll run Python manage.py and we're going to go ahead and do start app and customers I'm going to call it the same name as stripe calls it it makes a lot of sense logically but I also want to correspond this resource with the stripe ones so in case you are curious about that you can always go into the docss go into the API and you

**6:21:09** · can see all of the core resources in here there are a lot of them we don't need to correspond to all of them just some of them and so if we look at the customer one we can see the customer object we can see all of the data that is available to us that we could sync with our D Jango database if we wanted to now you don't have to sync anything the only real thing we need is that ID

**6:21:31** · all of this other stuff is fairly optional live mode might be one that you want to sync that will be discussed later but overall you want to make sure that you only grab a certain amount of that data that you really need on your database now of course if you're doing in-depth analysis just keep in mind that you can always use the stripe API to then grab additional data that you might need in other words I'm going to go ahead and make sure that my D Jango model specifically for the customer is

**6:21:59** · going to have basically two Fields so I'll go ahead and do class customer and this is models.

**6:22:05** · model and what are those two Fields going to be well it should be fairly straightforward but user and then the stripe ID which is really the stripe customer ID but we'll just call it the stripe ID because the model itself is the customer class uh okay cool so how do we grab these things fairly straightforward as well so we'll do from jango.com import settings and then I'll go ahead and set the user equals to settings Dot off user model which is really just code for the string of off.

**6:22:40** · user but it is far more reusable if that's the direction you're going to go in the future as in changing that model so what we want to do here of course is a one to one field I only want one stripe customer per one user that's really the idea and then I'll go ahead and do on delete and models. Cascade great so basically if this user is deleted so is their customer reference number uh in our database next up the stripe ID is just going to be models.

**6:23:08** · charfield max length is probably going to be 120 null being true blank being true 120 is probably even too long so if we were to look into the documentation itself this is not 120 characters that is I don't know less than 20 but the idea being that we've got um a user and

**6:23:29** · a stripe ID that are going to be Associated and this should say blank true okay so I'm going to go ahead Define the SR s strr method as well and it's going to return well just simply self. user. username now normally when you have something like this you might need a condition like oh if the user is even set then you set it but this is a one toone field this customer model should not be able to exist without the user itself cool so with this in mind

**6:23:57** · I'm going to go ahead and bring it into my settings into installed apps what do you know right there we'll do customers here and then we'll run our python manage.py make migrations and then python manage.py migrate great so with that in mind let's go ahead and add this into our admin too so from.

**6:24:19** · models we're going to import customer and then admin. site. register of that customer okay so with this in mind let's go ahead and run our server now and there we go let's log in and into our customer create a customer and we'll go ahead and create this hungry P customer and hit save and continue so naturally all I did was enter this into my Jango database it didn't actually do anything with

### Override Django Save to Create Stripe Customer

**6:24:51** · stripe now in order for us to create this stripe ID for a customer we have a number of different options the option I'm going to opt for is overriding the default save method inside of a Jango project so what I have here is actually

**6:25:08** · the same thing as the save method which is ARS and keyword ARS so this is not doing anything new what we can do is inside of this save method and more specifically referencing self we can reference the row or the instance for every single thing every time it's being called as save so for example if I did self. stripe API equals something cool

**6:25:31** · save that in our actual code then go into the D Jango admin assuming that we still have that open and then hit save and continue editing it will show me something cool and if I were to delete it again it will show me that once again and so the reason we put it before the save method is that well after the save method it's not going to do anything so this is post save will not update for a number of reasons but we can do self.

**6:26:03** · stripe ID being something else save that and I hit save and continue in here assuming that it's still running uh looks like it did but nothing changed right so it basically did the same thing now one of the things about this is how familiar you are with Jango models altogether so what I want to do then is let's go ahead and jump into the shell and do python manage.py shell and let's navigate into the source to make sure that we can do that so from customers.

**6:26:34** · Models we're going to import everything and then I'm just going to go ahead and grab my first customer.

**6:26:41** · objects. first okay so this should give me that very first customer that I created so anytime you call obj Dove it's quite literally going to insert this data into the database it'll store this data into the database so if I hit save it's doing the same exact method the entire thing including this something else in here now what's not

**6:27:03** · happening is it's not actually running these post saves it's not going to update things if you don't call Save it's just going to completely ignore it so um let's just try this for a for example so if I just look at obj Dost stripe ID in here it actually does say something else but as soon as I exit out of here run back into the shell and then

**6:27:25** · do it all over again like grabbing the import grabbing the customer and then the stripe ID I see that it does actually say what's in the database so yeah it's sort of changing the field but it's also sort of not now this has a lot of implications of the the different things that you can do but just keep in mind that you run theave method that will actually change things that will commit it to the database and if you were to create an object like customer.

**6:27:55** · objects. create and let's say user ID being one I'll explain that a second but if I do create here this will also do that save method it will literally also run it so there's a lot of different ways on how this save method can be called now the reason I used user ID of one has to do with the fact that in my users here this ID this user right here has literally an ID of one and so we can

**6:28:21** · actually use foreign keys in that way we grab the foreign key name and then do underscore the ID and then that then we're able to save it so if we look back into our model we can see that I've got a username here if it said owner then this would have to be owner ID there's a lot

**6:28:42** · of different ways on how we can associate that as well which I'm not going to talk about right now but it's mostly about this overriding the save method here so one thing that you might be interested in doing is saying something like self. saave and running that but of course you are causing

**6:28:58** · recursion you're causing it to call itself it's going to continuously call itself until the memory runs out so in the admin if I were to go into my customer here either one and hit save and continue it's just going to hang as you can see it's like loading eventually it's going to say Max recursion depth reached because it just keeps on calling itself over and over and over again um and so that's something of course we want to avoid now for this reason the reason I'm bringing this up it has to do with setting this stripe ID for this

**6:29:30** · user and so instead of doing something cool we actually want to set the stripe ID to Something Real so inside of billing here I'm going to go ahead and grab this create customer method that we almost did create or use but now what

**6:29:45** · I'm going to do is I'm going to get my response back from stripe here so I'll say response equals to that and then realistically what we're going to return back from that response is just the ID we can also pass in something like raw in here or let's say raw being false and we could say something like if raw then we can return back the regular response but all I want is the stripe ID this is going to be the stripe ID in fact I should probably just say stripe ID equals to the response just like that so

**6:30:18** · we get that back great so that's handling the function itself but now we need these arguments in here of course so there's a couple different ways to think about this as well we could pass in our user object and then write down this user object or we can pass in just

**6:30:35** · the arguments that are needed now the reason I'm going to pass in just the arguments that are needed is so that this entire module with the exception of maybe the naming of the Jango debug I could reuse in other python projects that's really where I'm thinking with this module itself because the stripe API you might want to use it in fast API or flask or whatever other python project out there that you might want to use so in this case I'm going to go ahead and create customer being simply the name and simply the email basically

**6:31:07** · any arguments that I might want to pass in here I would then continue to refine this now of course this this name and email is not correct we want to leave it as just empty strings in here so that the stripe API can handle it as it sees fit so I'm going to go ahead and do this and then go ahead and do that great so

**6:31:28** · the first thing that I want to do is call this in my save method and we're going to return the raw response so we can see what ends up happening here so into models.py we're going to go ahead and import helpers billing and then in here we'll go ahead and just call helpers do billing Dot and then create customer whatever that customer is going to be in my case I'll leave it as empty strings for names and email and then pass in raw being true and then now I'll

**6:31:56** · go ahead and say the stripe response equals to that and we'll go ahead and print this out save it and let's reload everything go into the ajeno admin here and let's go ahead and make sure we'll just hit save and continue the stripe ID part didn't change yet but notice that in my print statement I got all of this data back in here which is great so this is the actual stripe data that's coming back from the API this is all of that raw data so what I want to do of course is

**6:32:27** · not name the customer with no email I want to actually correspond the email to the user itself let's remember back to when we were doing something with Jango allof a big part of the reason we used Jango allof had to do with the fact that when we were to sign up we get email by

**6:32:47** · default we actually have emails coming through in here how we configured it with the mandatory email and all of the authentication methods and all that so the reason I did that was for stripe so it's correlated because if I go into stripe right now and take a look at my customers I see that one has no name and

**6:33:05** · no email that doesn't help me at all and then I have one that is just a pure example so both of these aren't great so I want to go ahead and get rid of both of them so instead what I want to do is I want to go ahead and actually create this user that's based off of their actual data so the way we're going to do this of course is to grab the email from self. user. email and so I'm going to go ahead and say email equals to email now

**6:33:30** · I'll turn off raw being true to being false this is now just simply going to be our stripe ID okay and so now I can just go ahead and change this to being the stripe ID just like that okay so the problem here

**6:33:46** · is if the user does not have an email if you know email equals to an empty string or email is none then we are going to basically not do these things actually I'll just leave it in as if email is not equal to an empty string and is not done there so this will allow me to do that the other thing though is if I already have a stripe ID then I'll also not do that if stripe ID or rather if not stripe ID

**6:34:17** · then I will not go through this process whatsoever in fact I'll go ahead and do that so if there's already a stripe ID on there then we're good to go okay so back into our customers here in stripe we should have no customers whatsoever at this point and if we go back into our admin for a customer that definitely has an email we can verify this by actually editing the user itself which of course

**6:34:41** · there's the email right there which you may or may not need to do but I'm going to go ahead and hit save and continue it's not going to run it because stripe ID is something that's related to the stripe user so the other thing about this that you might consider is going into the customer object itself and

**6:35:00** · seeing the ID notice that it starts with with C uscore this is definitely corresponding to how the stripe API works so if you go into charges and you look at the charge object for example um you can see that the charge object starts with chore and if you go into any of the other objects they all start with a unique value so the only reason I bring that up is because this ID here we might

**6:35:28** · put in a clause here saying something like if the ID does not start with that then we can run this process um but I'm not going to do that at this point just something to think about okay so here in our hungry pie I'm going to go ahead and get rid of this we'll hit save and continue and now I should have my stripe ID in there and if I go into my customers here I should now have a customer now corresponding to that one

**6:35:51** · customer Let me refresh in here let's see if it actually came through and sure enough there it is great so we can always enrich the customer data with more data like I didn't pass the username or the name that is something you can absolutely do but a big part of the reason for this is so now if I need to search in stripe I can just search by

**6:36:10** · the actual customer email and now I can get some data about them like how much they've spent and all that if I did not have that email in there it's going to be a lot harder to actually correspond these two customers uh with each other it's going to be really really hard so this is why I'm doing it this way now there's a huge caveat here that we need to understand and that is the difference between production and and development

**6:36:35** · when we go into production here some things about the stripe API aren't going to work the same as they have been and so we'll come back to that in the future but the idea being whatever customer you're creating here in development is not going to be the same one as it would be in production so if this was on production mode this same search would not have the same customer ID that's kind of what I'm getting at there um

**6:36:59** · cool so we'll we'll talk about that later when we get into more of the production stuff with stripe but for now we're going to leave it as is and we'll continue on by building out the actual subscription model as well Joo allo has some built-in signals

### Django All Auth Signal to Confirm Django Stripe Customers

**6:37:16** · here that we can use to associate the user to stripe automatically when the registration process happens now there's a bunch of different ways how we can approach this process but I want to keep in mind that jeno oloth also has mechanisms for changing your email address so there might be conflicts with that with users so we want to sort of avoid those conflicts and the way I'm going to do that is fairly straightforward and so the first part is we're going to implement a user signed

**6:37:45** · up signal then we're going to go ahead and Implement a user email confirm signal so those two are what we're going to use to actually create the stripe customer so when they sign up this will make the initial D Jango customer but then after they confirm that's when we will go ahead and Trigger the signup process for the confirmed uh you know stripe customer so the way this is going to happen then is we're going to go ahead and do something like init email and this going to be models. email field blank being true and null being true the

**6:38:19** · only reason for that is that I want to have if there is an initial email whatever that initial email is I want to then use inside a stripe so I'm going to change it from the user's email to whatever it is at the time to this initial email next we're we're going to go ahead and do init email confirmed and then models. booleanfield and default being true or rather

**6:38:43** · false great so now down in our save method we want to go ahead and say if not this then we'll also say if not self. in it confirmed or rather if it is confirmed great and self. init email then our email is

**6:39:03** · just going to be the init email okay so naturally the init email will have to be filled out in some form or fashion but we're going to go ahead and do it with the signals so with these changes I'm going to go ahead and run my migration so let's go into SRC and then python manage.py make migrations and then python manage.py

**6:39:29** · migrate okay there we go so the other part about this is how we actually create our end user which we'll talk about in just a moment um but what I want to do is bring in these signals here so the first one is going to be the user signed up signal

**6:39:46** · so inside of allo under regular accounts under signals you can see these signals right here and so to do this we're going to go ahead and our models and under D Jango we'll go ahead and do from allof do account. signals we're going to import the user signed up signal and then we also will import the email confirmed signal and I'm going to just change this as allof user signed up and

**6:40:14** · then all as allo email confirmed now again this is because these functions are a little too vague here I might even put a signal there altogether but the point of signals is to have some sort of receiver so we

**6:40:32** · create a receiver function this I'm just going to call it a Handler and for now I'll just go ahead and say pass then I want to connect it to the signal that I'm using of course with my custom name here so we'll go ahead and connect it just like that so if you're not familiar with signals they often need to exist in models.py or at least it's a good idea to do that so that we have a way to trigger things like the actual customer

**6:40:55** · itself so what I'm going to do here is I'm G to pass in a couple arguments those arguments are in the documentation it's those two right there request and user so you can put in request and user and then ARs and keyword ARS okay so what is it the email that we want when they signed up well when they sign up it should just be email is user. email and that's it so we literally have their email there so we can now create the customer instance so the customer instance is going to be customer.

**6:41:25** · object.create the user is going to be the user and then the in it email is going to be the user email again this is duplicate data but it's mostly to make sure that this logic is working correctly we also want to go ahead and say that the init email confirmed is false now there is

**6:41:47** · something that we can continue along with this in just a moment but the idea is this is the Baseline data we'll have when that user signs up great so this then means that when we go to verify the email email confirmation confirmed this signal right here we could then create a Handler function for that so now I'll go ahead and do that with our allof email confirmed Handler so we'll go ahead and call this Handler and it's going to take a request email confirmed and then ARs

**6:42:20** · and keyword ARS it might say email address we'll check that in just a second but we'll do the confirmed and then connected just like this okay so what's the argument name in here it's going to be confirmed and email address with

**6:42:36** · signals you definitely need to have the arcs and keywords ARS in there just to make sure that that's working so with this email address this is saying that it's confirmed what I want to find is all of the customer objects and we'll go ahead and filter this down instead of create we don't need the user we just need in an email being this email address and again we need it confirmed being false this of course is a query set so what I'll do is I'll go ahead and do for obj and query set I want to change the init confirmed

**6:43:06** · so this is going to be obj do the init confirmed being true now and then obj do saave so what this should do then is trigger this save method we've got confirmed being true and we also have an in an email then we've got all of the other things that are coming through in here and so now we've got a way to trigger this this will send the signal now for those of you who look more into Jango query sets you might see something called qs.

**6:43:38** · update and you could do something along these lines this will update all of those values in the database but what it won't do is it won't actually trigger this function right here so just keep in mind if you go that direction so I don't recommend doing that and I'll just comment it out and says does not send the save method or create the stripe

**6:44:04** · customer there's a lot of different ways on how we can go about that as well uh but for now we have a way to then have our customer being confirmed and then added into stripe now in the long run you might not want to put these in as signals you might want to put them in as background functions using something like celery or a worker process but that's a little bit too complicated for what we've got now so let's go ahead and actually try this process out now and the way I'm going to do that is by running my server let's go ahead and come in here run

**6:44:36** · server and then I'm going to go ahead and jump into the admin and what I want to do is I want to delete my hungry pie user that actually does have an email account in here go ahead and delete it yes I'm sure and then I'll go ahead and open up a new incognito window try this process out

**6:44:56** · and we'll go ahead and sign up hungry piie in here hungry piie and then a whatever password okay so what's happening here is it should send that signal it sent the verify email address in there as well so if we look inside of our customers we should see the hog piie customer sure enough we do we do not have a stripe ID we have an in an email we do not have in an email confirmed great so at this point I should get an actual email in here from my own account

**6:45:28** · I'm going to go ahead and copy this URL here into the incognito window paste that in confirming the account okay so now back into our D Jango admin we'll refresh in here and now we've got our stripe ID and our customer confirmed great so this is a little bit of a hedge for the long run but there's another thing that we can do to make sure that our stripe ID our customer has additional data in here and that's going to be something like our user ID in here as user ID so what I can

**6:46:02** · do is I can actually pass in metadata and this will just be our user ID and this is going to be our self. user. ID right something along those lines into the create customer function so inside of create customer here we'll do meta data and it's going to equal to an empty dictionary here with this in mind we'll go back into the stripe API docs into to

**6:46:27** · create a customer and one of the things you can see is we've got this metadata key value pairs in here and so let's go ahead and pass in that metadata dictionary in here we'll go ahead and save that and there we go and here we go so I'll try this once

**6:46:44** · again with our admin user here or our hungry pie user rather I'll go ahead and delete this user here and then we'll go ahead and look into the customers let's just make sure that that customer is gone sure enough it is so I'll refresh in my Incognito once again and we'll go ahead and sign up for that account once again with all of the same

**6:47:08** · data and there we go verify email address I'll just go ahead and start well we can obviously see if our customer was created sure enough they were here but then I can go into my inbox now and I can go ahead and grab that email let's verify that email confirm it hopefully we don't get any errors looks like we did so I got create customer and I did met data oopsies that

**6:47:32** · should say say metad dat let's go back into billing and we see it says metadata as well let's see if I can rerun this not sure if I'll have to redo it again uh I will have to redo it again so I'll pause it real quick and redo that whole process Again by creating a brand new user okay so I'm back at that verify email address portion I'm going to go ahead and do this again copy this and

**6:47:56** · we'll paste in here confirm email and sure enough there's confirmed great so let's go back into our Jango admin into our customer here there's our customer looks like everything's looking good I'll go ahead and search by this customer ID into stripe and do a quick search here because obviously we've got a lot of different customers with that same email and so what we've got here is a metadata field now with that user ID so it enriched it quite a bit the user ID is specifically for our Jango user so

**6:48:28** · let's try this again with another user I'm going to go ahead and jump back into our users here for the customers I'm going to go ahead and create a new customer I'll do it as CFE this time the in an email I'll just go ahead and add it and then just say it's confirmed I don't actually need to confirm it here's a manual way on how we can create these customers I'll go ahead and hit save and continue and then of course we will end up seeing inside of stripe is these

**6:48:52** · customers so here's hello at Team CFE that one I just created there's that user ID and so I can also take that even further inside of our create process which is going to be this right here right and so I could come in and say username and then self. user. username

**6:49:11** · and we can really build this out quite a bit now there are other ways to improve this in terms of updating the customer if you wanted to update the customer on how they end up working and stuff like that but the more metadata that you have from your Django project into stripe the easier it's going to be if something fails and you need to associate them

**6:49:32** · manually or or even programmatically you would then be able to go through all of the metadata to make sure that those are coming through because if we go into that first hungry piie customer that metadata is not in there so this may or may not be the correct customer the next one same thing right and so those ones we could delete we can just say oh these aren't actually valid customers anymore so we'll just go ahead and remove them Al together so now that our Django users have an extended customer account and stripe it's important to know that now

**6:50:01** · going forward whenever we have a new user come in we need them to sign up through our website they have to do it that way otherwise you might run into issues with correlating data so for example if we were to go into the stripe account here and go ahead and add in a new customer and just add this customer here this may or may not be a real customer that you want to use the only way you can have them correlated to a Jango user on your application would be

**6:50:29** · to use that stripe ID which is definitely something something you could do manually but it's something to keep in mind as you go forward I don't recommend going that route I recommend going the route of having everything being through the API as in through our d jeno project to create all of your customers and stripe but the reason we spent so much time correlating this data

**6:50:51** · has to do with the fact that it's really easy to make it not correlated and when it's not correlated then you get so many issues that could come about from your users from the financial institutions and just from just general access all of that frustration we want to avoid so the two keys here are make sure that your customers sign up through your website through Django allo that's a key one and

**6:51:15** · then the other key one is make sure that you don't use stripe to create new customers you can use stripe for a lot of things but that's not something we want to do at this point unless you build in a mechanism that listens to when new new customers are added but the thing about this new customer thing right inside of stripe is it's not going to verify whether or not this email has been used before so yeah let's avoid it all together and just use Joo at this

### Our Django Subscription Model as a Stripe Product

**6:51:43** · point now we're going to go ahead and do the subscription pricing inside of stripe and connect it of course to our Jango project now inside of stripe it's actually going to be called a product so the subscription itself is a product of our service there is something called subscriptions in stripe but that's the actual process of billing that actually is correlated to the end user that is not what we're going to be doing here just products so we make product and price so really it's about the pricing

**6:52:11** · so if you look at create price here you've got the ability to do a re reoccurring amount and that's what we actually want to work towards but first what we'll do is actually create our subscription model very similar to our customer model so we're going to go into our subscription here and I'm open up models. high and this is where I want to build things out now the actual subscript destion we're going to go ahead and put this in here as a little note and we'll call this stripe product rub equals to a stripe product

**6:52:42** · basically uh in addition to other things of course but in here I want to go ahead and create the stripe ID and this of course is going to be the same length and same sort of model uh field as what we did with our customer and then of course we want to do the save method once again so it's going to be very similar to this save method here but of course we want to modify it so it's for the product itself so in this case I'm going to go ahead and import my helpers

**6:53:10** · and billing and so naturally we want to go into helpers and billing and then we're going to go ahead and Define create product and it's going to be similar to what we did with customer except the arguments are going to be slightly different Okay so we've got our create product here let's see what the arguments are at the Bas Baseline if we go into create product here we just need

**6:53:35** · the name that's pretty much all we need we also might want to pass in metadata like the subscription ID so that's actually what I'll do so we're going to go ahead and do our name in here just the name just like that this is going to be now stripe. product. create get rid of the email and boom basically the same thing okay so and naturally I want the

**6:53:56** · stripe ID as the response so let's go back into our models here for our subscription we'll scroll down a bit and I'll now do create product get rid of the email as part of this we don't need that argument anymore we just need name equals to self. name which of course was our subscription name here okay which will also be our product name the metadata is not the user ID but

**6:54:24** · rather we're going to call this our subscription plan ID that's essentially what this is is a subscription plan maybe we change the model name maybe not uh but anyway subscription plan ID will just be self. ID and then we'll get rid of our username in here great simple enough now let's go ahead and test this out so naturally I added a new field in

**6:54:49** · my models St high so I want to go ahead and run my migrations and we'll do that with python manage.py make migrations and then python manage.py migrate okay let's jump back into the admin here and take a look so inside of our

**6:55:09** · subscriptions we're now going to go into our Advanced Pro Plan we should see our stripe ID in there I'll hit save and continue and I've got no in it confirmed email oh yeah so we have a few conditions on this save Clause that we definitely don't need so basically if the stripe ID is not there uh then we'll call these things that was a little bit of something I should have done but there we go simple enough let's go ahead and if I

**6:55:36** · open this up a bit I can see the calls that are coming through here and we'll just separate it out just a little bit more so it's easier to see there we go and now let's go ahead and try that again I'll do a quick refresh here and

**6:55:51** · the subscription change sure enough there it is if I go into stripe and I search for my products so if you do the search of product catalog we might see two in here cuz I think I might have created it twice but uh let's go ahead and do a quick refresh into my products but there it is Advanced Pro Plan okay so no prices are available so there's no way that somebody can sign up for this so the reason that we can have many different prices is if you need to change your prices anytime but also if you want recurring prices in terms of

**6:56:24** · annual monthly every 3 months or custom you could obviously go through and really customize these things we're going to look at it in terms of annual ual and monthly so there's two different basically pricing options there but that's going to require a whole another model now we could put the pricing directly in line with this subscription but then that would mean that this subscription model has all of the pricing information too instead what we're going to do is create a brand new class and model for it that will then be Associated to this subscription model as

**6:56:56** · well through a Ford key very similar to what we did with our customers as well so let's keep going now we're going to go ahead and create a price for any given subscription product but the idea here is creating these prices we can come in and create them just like this now notice by default the price we can create a product when we create a price so if you really want to simplify things your subscription itself

### Subscription Price Model

**6:57:23** · would only have one price but the thing is I think most SAS applications have a monthly price and an annual price we want to do both of those same things so that's what I'm going to be doing right now so let's go ahead and copy a lot of our subscription model here and right below it we'll go ahead and paste it in here and this going to be our subscription price plan or subscription

**6:57:46** · pricing and this is going to be equal to a stripe price okay so we're going to call this subscription price great so the first thing is we want to go ahead and say what our subscription is going to be and this is going to be equal to a models . for key and of course it's going to be the subscription model itself and then we'll go ahead and do on delete equals to models. set null and then I'll go ahead and say blank is equal to true now

**6:58:17** · the reason I'm allowing for this is so that I can still see historical prices if for some reason I deleted one of the subscriptions itself the prices are more important in terms of the correlation on you know stripe that it is the actual subscription itself so that's why if the actual subscription model was deleted we will just leave this being blank and that's what it'll leave as okay so with

**6:58:42** · this in mind now that I've got the subscription that I want I'm going to go ahead and get rid of some of these things here I probably don't need the name in there either I just pretty much need the stripe ID and then a few other things but before I go much further what I will do is I'm going to create a property here and I'm going to define the product stripe ID D and it's going

**6:59:03** · to take in self and it's going to return something well now that our subscription can be null we'll go ahead and say if not self. subscription we'll go ahead and return none that of course we'll have to account for when we do some things in just a moment but if it is if it does have a subscription then we'll return self. subscription. stripe ID

**6:59:25** · right whatever that ends up being which also in theory could be none as well but more than likely if you're creating this subscript cription you're then going to create the price not the other way around so this hopefully will work assuming that the subscription is valid

**6:59:41** · so now that we've got that we can then start thinking of our actual pricing call so I'll go ahead and copy this whole thing and I'm just going to design it right in line in the model and then I'll move it into the helper in just a moment so we'll do self ARs and keyword args here and then I'll go ahead and put that super call in here as well and again args and keyword args

**7:00:02** · okay so let's go a and paste this in here and I'm putting all of these things in here I don't need all of them necessarily but I just want to think through all of the things I'm going to do here so the first thing is the self- product ID so first off we'll check if self. stripe ID uh is none and self.

**7:00:21** · product ID is not none that's really the key here so I'll go ahead and wrap these into a parenthesis here and there we go and there we go and then just separate it out a little bit okay so very similar

**7:00:39** · to like this we could probably say if not stripe self stripe ID as well just to keep some consistency in here there we go and next thing is I'll go ahead and tab this forward so now with the self. product ID we can change this product data here from product data to just simply product and that's going to be equal to whatever that is next step we want to do is the reoccurring Revenue now I want to have both kinds I want to be able to do yearly and monthly the way

**7:01:10** · I'm going to do this is I'm going to go ahead and say interval and this is going to be equals to models. charfield and we'll do max length being like 120 and then I'll say a default is going to be something which we'll go ahead and leave it as monthly for a moment and then I want to set up some choices so now I'll go ahead and Define the choices I want so we'll go ahead and do our interval choices and this is going to be models. text choices in here the first

**7:01:40** · one we'll put in caps as monthly and it's going to have two values here monthly as a lowercase value and then monthly as an uppercase value so this is what's going to be displayed on the drop-down we'll see this shortly and then we'll see monthly is the default that's going to be what's stored in the data datase so now with this I can do interval choices dot monthly and

**7:02:06** · it's just a really nice way to separate out what our choices will end up be being and making sure that they are based off of these choices here we just pass in choices equals to interval choices. choices okay so of course monthly and then we want to grab the next one whatever that other option is which of course we'll jump into the stripe docks for this and so we've got our options for the price here and we

**7:02:33** · want to see re reoccurring and then we want to see the different interval choices and here's the different options for billing frequency so monthly is actually month yearly is actually year okay so we want to change this to month and then this one to year and then we'll go ahead and say yearly just like that so the database value is what's important here these values are also important for when we actually use them but those are going to the choices it's going to be either month or year for the pricing okay so

**7:03:06** · now that we can do that we can come back into this reoccurring here and we can just say self. interval and that's it now notice this is very similar to what you saw may see inside of the stripe uh you know product dashboard here we can go to add price and we can see this billion period notice the label right so

**7:03:25** · that's important that label there is exactly what we just did that same sort of label it doesn't say month on stripe it says monthly oh and this should say yearly or annual it's completely up to you on how you decide that so next up what we can do is uh there's obviously a

**7:03:42** · few other options as far as reoccurring is concerned but we're not going to go ahead and change the interval count at all but you totally could notice that it says allow 3 months uh which is also pretty interesting but I'm just going to leave it as these two so of course the next thing is going to be our pricing and our currency I'll do the currency first because we'll leave it bit static I'm going to go ahead and come in here and do property and then Define the

**7:04:07** · stripe currency and this is going to be self and I'm just going to return the default that I've got which is Us doll now yes you can obviously turn this into a field as well and have different currency available on here uh that's a little bit outside the scope of what we're trying to do but you could also do something very similar to like what we just did with the interval the next one is the unit amount notice it's says a th000 so

**7:04:33** · it actually does not have a decimal place for pricing so what we'll end up doing then instead is we will use a our own decimal field so I'll go ahead and do price being models. decimal field and what we want here is Max digits however many Max digits you'll want 10 is probably more than enough uh if not way less than that and then decimal places we'll go ahead and say two and then we'll set a default which I'll put at 99

**7:05:02** · 9999 something along those lines okay so that's going to be the display price as well or close to the display price as well what I want to do then is create yet another property and I'm going to go ahead and do stripe price takes s self which is really like if this is $99.99 this is going to be self up price times 100 we just need to get rid of decimal places in here for stripe remove

**7:05:30** · decimal places but our decimal field we still might want to have for our display purposes and so there's our now stripe price so we'll come down here and do self. strip price great so we're now at a place where we can put this into the building model itself or actually the building module itself so we'll go ahead and now do something like create

**7:05:53** · price okay and then I'll go ahead and grab all of these different arguments that I had in here I'll go ahead and add in a metadata one as well and then we'll call this very similar to what we did with our subscription one which I believe was let's go ahead and scroll up

**7:06:10** · a little bit there it is right there so this is going to be the subscription plan ID which was the other one this is now going to be the subscription plan price ID and there we go okay so those are going to be all of the arguments we're going to pass into our helper function so we'll go ahead and bring them into billing and then I'll just paste them in here and then I'll give some default values for this stuff so

**7:06:35** · currency we'll do 99.99 that's the same thing that's $99.99 unit amount or rather this should be USD and this should be $99.99 and then the interval being whatever interval that we had before which we said per month and then the product itself we do not have so I'm going to go ahead and say none and then our metadata we'll leave as an empty dictionary okay so now what

**7:07:05** · I'll do then is we'll say if product is none return none maybe raise a value error or something like that uh but I'm not I'm not going to do that at this point okay so the next upep is I'll now copy this whole thing of price and we'll come back into our response here paste that whole thing in and of course changing these to the different arguments that we just passed from our

**7:07:29** · other value now one of the things I will actually do is instead of reoccurring being a entire dictionary I don't necessarily need that level of granularity for this you could always change it as you'd like but I'm going to just change it to being the argument being uh the interval itself so that's what we'll pass in just a moment and then the product being this and metadata we will leave in as a

**7:07:58** · dictionary great so uh reoccurring is no longer that so we can get rid of that argument in there as well perfect so now we're going to come back in here and we're going to use the helpers do billing.

**7:08:15** · creat price argument here and then we'll just pass that interval being self.

**7:08:21** · interval and there we go so this response will just be our stripe ID and I'll go ahead and say the raw is false I'm not sure if I did this up here as well but let's go ahead and do it yeah looks like it is there okay great so now we've got our stripe ID here so I can get rid of these Imports as well and the there we go and then we'll do self. stripe ID equals to that stripe

**7:08:52** · ID great so now we've got a bunch of stuff in here that's looking pretty good as far as how we want this designed and how we should be able to create these different products so naturally what I'm going to need to do is I'm going to need to bring this into the admin but before I do that I'll go ahead and run my migrations and then we'll look at the admin in the next part so make

**7:09:14** · migrations and it looks like I've got something right here as a null I can't do that for how it's set and this should not be blank being true but rather null being true that's a little mistake there okay so let's make those migrations and then python manage.

**7:09:30** · py migrate now we're going to go ahead and bring this subscription price into the D Jango admin but more specifically right associated with the subscription now before we jump into that one of the questions you might have is like why isn't it already in there groups and permissions are well the reason being is

### Manage Prices in Django Admin with Tabular Inlines

**7:09:55** · that we actually used a foreign key Association here instead of the mini to Mini Field Association like we did with those other two now part of the reason I use these Min to mini Fields was because that's how the user model works as well in the group model we can see that it's very similar to that granted the admin styling might be a little bit different but it's very similar to that process so it feels natural to be a mini minifield

**7:10:20** · the other reason has to do with the fact that I can't do much editing for the groups or permissions in here inside of the subscription in in other words the many to many fields don't allow for editing by default like the foreign keys do as we'll see right now so the first thing we need to do is jump into the admin portion for the subscriptions and we're going to go ahead and create a class called the subscription admin and this is going to be admin. modeladmin

**7:10:47** · and then we'll just go ahead and do list display and I'll just go ahead and give it the name for example so this list display is fairly straightforward but it's taking this name field here we also maybe put in something like active like

**7:11:03** · that right I don't think we'll need groups or stripe ID in there but there we go so that's going to be our list display so once we save that assuming that our server is still working we can go back into the admin and take a look at our subscriptions and now it looks a little bit differently right so that's actually pretty nice but the reason we're doing that is so that I can bring in the subscription pricing in line so

**7:11:28** · obviously you can build out the admin a lot more than what I just did but I want to bring in the subscription price to being inside of this admin the way we do that is by creating a class called admin. tabular inline and then we pass in the model we want to use here which is going to be our subscription price Model and then we're going to go ahead and do something like extra being how many extra prices we want to have in here and I'll just leave it in as one then I can do in lines here and just pass in this inline this is like one of

**7:12:00** · the simplest ways to get other data foreign key related data right in there and what do you know there it is so I did an extra being one so that we could just see the example but what I actually want is an extra of zero so that there are no prices in here by default as in new prices until I actually start to create them so now we have the ability to create new ones and realistically I probably don't need to manage this stripe ID inside of the subscription price at all so I'm going to go ahead and do the read only Fields being my

**7:12:33** · stripe ID which is actually really nice cuz then when I refresh all my subscription here assuming that I can I can then just use my interval in here and we'll do that monthly price at $99 the yearly price being something like a you know we'll do 1099 which saves a little bit um and we'll go ahead and hit save and continue what both of these things would in theory do is actually create the request itself but I get invalid integer here uh this is

**7:13:01** · actually not that surprising and part of the reason why I didn't test everything out yet was so we could do this tabular in line to see it the stripe price itself needs to be an integer so we actually need to turn this into an integer right here and this actually

**7:13:16** · will definitely turn it into an integer because two reasons one this says decimal places being two and then two this is going to go ahead and multiply that by basically moving it over two decimal places and so that's how we can turn it into an integer let's go back into our subscription here and let's see what's going on with it the subscription prices is not showing up I'll go ahead and add both of them once again yearly and we'll go ahead and hit save

**7:13:44** · and continue editing and hopefully what we'll see is that stripe ID come through here and sure enough it does cool so what we can also see is that the stripe ID is of course inside of our subscription which is probably something we won't want to modify ever we don't want to even accidentally modify it so let's go back admin here that's going to be yet another thing that'll add in to the subscription admin the customer on the other hand you might want to modify from time to time and so we'll leave it in the customer the ability to remove it

**7:14:14** · if there's some issues with that and you have to go into the stripe admin and give your customer a brand new stripe ID that's completely different than what we're doing here the subscriptions we shouldn't have to change but there will be stuff that we want to be aware of when it comes to these prices in other words what if I want to add new prices in here that's something we'll we address in the next part uh but for now we've got these right here and there's one other thing that I want to do in the jeno admin and say can delete being false like I literally do do not ever

**7:14:42** · want to be able to delete the subscription pricing so I'll refresh in here and notice the delete claw goes away this is actually fairly important in terms of how we manage this so what do I do since it's not delete how am I going to avoid using this subscription

**7:14:59** · pricing well the way this is going to work is with another field so in the subscription price itself we need to have an active value in other words I want to have only one active for month and one active for yearly and that's it so that's something we'll address very soon but at this point we now have prices for the subscription and naturally you're going to want to go through and make sure that all of yours have prices and then of course if you go into the stripe admin you will see exactly what those prices end up being and there they are $1,000 a year $99 a

**7:15:29** · month that's exact what we looking for uh so yeah cool we're in a good place let's go ahead and actually build out the next level of this and change what subscription prices can be displayed so when it comes to pricing we eventually want our pages to look something like this when they go to select what price they're going to have in other words it's going to have one price per subscription tier and that's

### Featured and Ordered Pricing

**7:15:57** · it that's all we want to show at this point though what we could do is we can absolutely have more than one price per subscription tier and we can hit save and continue and then you'll see that this one single tier has two monthly prices that's not what we want so we want to change that the other part is we want to make sure that we can order it as well as in which one should be first second and third so these are two things that are fairly straightforward to do in our subscription price Model here we can go ahead and set an order right here so I'm going to go and do orders. model.

**7:16:30** · integer field and the default being1 I'll explain that in a second next up we're going to go ahead and say the featured one and this going to be models.

**7:16:42** · booleanfield and default being true so the feature and the order both take into account other models that are similar so let's go ahead and make these migrations first and python mpy make migrations and then we'll go ahead and do python mpy migrate great okay so what I want to do now is I

**7:17:05** · actually want to grab the save method here and essentially say If It's featured all of the other ones should not be featured so after we save it we can go ahead and say if self. featured then I'll do a query set of basically the entire subscription price Model so let's go ahead and grab that query set.

**7:17:26** · objects.

**7:17:28** · filter so what the filter is going to be is of course the subscription itself so we'll go ahead and do subscription equals to self. subscription naturally we will go ahead and say and self do subscription so if it was deleted from the subscription for some reason we don't want that so now we've got this next up we're going to go ahead and filter it by the interval itself so

**7:17:53** · interval being self. interval okay so this is going to be all the same ones that match the interval all we need to do here is exclude the ID from self. ID so this is now going to be all the other query sets that have the same interval from the same subscription and now we can do qs. update and then

**7:18:14** · featured being false this is going to update all of those other ones and of course this featured is featured in the D Jango web page right so we'll go ahead and do a help text here and we'll go ahead and say something like featured off on Jango pricing page something along those lines so we know that this has nothing to do with stripe really and then I'll go ahead and do the same thing for my order and we'll go ahead and say ordering on D jeno price page good Next

**7:18:47** · Step what I'll actually do is I'll add in a updated item here with models. dat time field and we'll go ahead and do auto now being true and then I'll do another Tim stamp being models. date time field and auto now add being true

**7:19:05** · okay so I'll save all of that I'll run my migrations again it's going to ask me about my timestamp auto now I'm just going to provide a oneoff default by doing time zone. now normally I would put that in to the actual field at first

**7:19:22** · when I create that subscription price but I want to do it now for a good reason so now I'm going to go ahead and run the migration so python manage.py migrate and there we go okay so now we got ordered and featured so the first thing is just to verify that ordered or the featured part works and then we'll do the ordering part so back into the admin we'll go back into the one that actually has pricing in here and so

**7:19:47** · notice that they're all at featured here I'll go ahead and hit save and continue and it probably won't change anything at this point so I'm going to go ahead and add another one monthly and this one is going to be $89.99 also at featured hit save and continue and so what this should end up happening is it actually unchecks the other ones and so if I were to change the $99 one being featured hit save and continue it should also uncheck

**7:20:14** · all of the other ones great so that's a good start so we are now able to change what's going to be featured what's going to be displayed inside of our jle project which is really nice this help text is not showing up because we're using a tabular in line here uh so what

**7:20:32** · we can also do is something like a stacked in line if we wanted a little bit more data that's going on in those subscription pricing and then that way we can see exactly what's going on in here now of course one of the downsides of this is we can't actually delete these new prices so this might be a time where we're like okay maybe we can delete them and maybe we can add some additional features there U but I'm not going to do that I'm just going to leave it as is and just have our featured once in here so the next part is the ordering

**7:20:59** · of it and the ordering should take two places the ordering should probably actually be on the subscription itself um not necessarily in the prices themselves so it's kind of going to be up to you on how you go about doing that where you put the ordering uh but what we can do here is do class meta and do ordering based off of the order and then

**7:21:21** · whether or not it's featured and then we're going to go ahead and say updated in Reverse so the most recent updated should probably show up first okay so now I'm going to go ahead and make my migrations again now that I've added that ordering clause in here and sure enough there we go we refresh in here this should give us a different ordering look so what I want to do is I'm going to go ahead and put this as one and this as one hit save and

**7:21:51** · continue and now we've got the ordering just slightly different okay so this part doesn't really make that much of a sense unless you intend to have multiple prices shown on the page itself which we are going to have either or we're not going to have yearly and monthly show up we'll have them separate so I'll actually bring the ordering back to the subscription but do something very similar to it so I'm going to go ahead and copy all of these things and come

**7:22:16** · back into our subscription itself and we're going to go ahead and paste these things in here notice that I already have the meta class so let's go ahead and make sure that we bring this down as well and here we go so featured once again we want feature to work the same way so I'll go ahead and scroll down to where I did it down here and then we'll come back up and we'll be able to paste

**7:22:39** · this in here and I don't need this but rather there we go I don't need the interval uh but what I do need is essentially all of them uh whether or not it's featured actually doesn't really need to check against any other one so I can actually get rid of this Clause Al together so we don't need that one at all there we go I'll explain that once we build the model manager a little bit more once again I'll do time zone.

**7:23:09** · now and then migrate okay so now the ordering for the subscription is going to make a difference so let's refresh in here our Advanced one I'm going to have an ordering being three and then I'll hit save and then we'll go into our basic plan this should be ordering being one save and then we'll go into our Pro Plan and this will be ordering being two save

**7:23:38** · there we go so now we actually have the plans in order and so the actual prices themselves the subscription price in here we do have an order but what I also want to have is the subscription order so subscription uncore order we're going to try that out let's go ahead and make those migrations and then migrate

**7:24:02** · okay so now if I go into advanced plan Pro uh when I actually display it in the front end we'll end up seeing this Al together um with the prices in the correct order uh based off of the plan itself the actual subscription plan itself so that when we have a display table like this uh it will actually look correct in terms of the ordering

### Subscription Pricing View & Template

**7:24:29** · itself now let's go ahead and create our pricing view I'm going to keep this into subscriptions here and I'm going to Define it as subscription price View and it's going to take in request and then it's going to return render and of course request and then subscriptions SL pricing.

**7:24:46** · HTML and then we'll pass in some arguments here so the question of course is what is it that we need to look up well it's really just the subscription pricing based off of the interval we're going to display so the first interval is is going to be simply monthly so there's a couple different ways on how we can design this one to make sure that it's working in terms of the query set so what that means is in our view here we can go ahead and do from subscriptions. models we can import

**7:25:14** · the subscription price we don't need the parent subscription just the prices themselves so we would do something like query set equals to subscription price.

**7:25:23** · objects. filter and then we can do subscription price. interval or rather um let's do interval equaling to subscription price. interval choices. monthly so that's what we're going to start out with so this is going to be our monthly query set okay and so we'll bring this in as

**7:25:45** · our monthly query set being like that but with the same logic what we could do instead is not just that query set but I'll go ahead and do the base query set which we'll be filtering again this time it's going to be featured being true right so we definitely want featured those are going to be the ones that are displayed as we put in the help text right here so with featured being there

**7:26:08** · I want to use that query set as the main one and then replace this subscription price. objects as that the query set so we can now have two different query sets in here and I'll go ahead and do my yearly query set and so we'll go ahead and do something like that great so simple enough as far as the view is concerned just rendering out all of these different things now the subscription pricing.

**7:26:32** · HTML I'm going to go into my templates here we'll go ahead and create that template and then I'm just going to go ahead and copy home.html and then paste in the home.html and then I'll go ahead and get rid of the block content here and then I'll change the page title to just simply pricing like that and then I'll jump into flowy go into blocks and

**7:26:56** · search for pricing and you'll see pricing tables in here and then I'll just grab that very first one as show code and notice that it's just the section so I'll go ahead and copy this whole thing out and then we'll go ahead and put this into our block content here granted I will change some things about it in a little bit but for now what I'll do is I'm just going to go ahead and put in my monthly Qs in here for a moment so monthly Qs just like that and so now I

**7:27:26** · just need to bring in that URL as an actual URL so with the view in mind I'll go back into CFE home into URLs here and then we'll go ahead and import similar to what we did from o but this time subscriptions and then as subscription views and then I'll bring in a path here for my pricing and I'll go ahead and do pricing and this is going to be subscription views dot the subscription price view

**7:27:57** · these two paths log in and register I'm going to get rid of now we don't need that anymore so with this in mind I now have pricing here I'm going to go ahead and give it a name of pricing there we go so that then in my navbar of course I can now go ahead and use something similar to this home one but specifically for pricing so we come in

**7:28:18** · here and we just change this to pricing save it up and let's take a look refreshing our set appication hit pricing and there we go so I have only one subscription price but we do have some of them showing up now some of the styling is off and that's because we really didn't customize how our styling is going to end up working so that's something we will definitely need to look at with the pricing page how we can change this and it comes down to some of the buttons that are available to this

**7:28:48** · so if we scroll down here what we will eventually see is like text green 500 that's working so that's green what we want though is the actual button itself that's in here uh for getting started so that's this primary so all I'm going to do is take a look for primary on this page like that and replace it with

**7:29:09** · simply blue and I'll go ahead and replace all of them and then we'll refresh in here and now I've got that blue color coming through and it's looking a little bit better flowy just changes that color a little bit and this would be adjusted if we had more customized uh Tailwind config so you can actually see the color that's being used in here as well uh if you're interested in that part but the main thing here is we want to make sure that we can actually set up this pricing correctly based off of these subscription

### Pricing Table based on QuerySets

**7:29:42** · prices so off the video I created additional subscription prices for my different plans my three different plans so now we're going to go ahead and make those things happen so what we're going to do here is inside of pricing. HTML I want to iterate through the monthly Qs to start so of course the way we're going to do this is by looking for the starter element here so I'm going to go and inspect the element here and I see that this is the block that I want to use so notice that there's the pricing card actual element in here as well and so what we do in our HTML as I can see

**7:30:15** · this pricing card and I can actually break this down so I'm going to go ahead and cut this out and I'm going to change it into a snippet inside of these subscriptions here as pricing card. HTML and we'll paste that in now this allows me to just focus on that one single thing and then I'll go ahead and copy this relative path inside of pricing here and I'll go ahead and include that relative path with the price object

**7:30:44** · equaling to uh the price object or rather we'll call this object equally to the price object and then I'll go ahead and get rid of the first part of this okay so that also means that all of these other cards I can get rid of as well so I'm going to go ahead and call this now pricing cards in here and then I'll get rid of the other two that were already in here as well so the way I'm going to do this is just by breaking down the related divs here so I'll go

**7:31:14** · ahead and select all of that and then break down this one if it's not already broken down and there we go okay so naturally what I need to do is just iterate through all of the monthly query set here so go ahead and bring it in with doing our Loop for Price object in

**7:31:32** · monthly Qs and then end for okay so price object is going to be the individual instance that we pass through to this pricing card if I save that and refresh in here I still have three coming through great and if I were to get rid of that sidebar I still have this little Gap here so let's take a look as to Y if we go into pricing again we've got this space YX whereas that

**7:31:58** · space Y is not necessarily showing up in other places so I'm going to go ahead and do MD space y0 as well and see if that changes everything and it does so that when I break it down I think that spacing will come into play so if I were to bring it down then we absolutely want to see some more of that spacing so not quite sure why that's not working correctly but we'll leave it as is for now the idea being that this card here of course needs to change based off of what we've got so our pricing card now

**7:32:30** · will need to have the subscription itself so the object is going to be the pricing object do subscription and thename or something along those lines right and so naturally just doing that will'll solve this but what I want actually is we'll just do our display subname or something along those

**7:32:51** · lines where the display name will come from the model itself so I want to do as much in the model as possible as I can so the subscription price I'm now going to go ahead and just say at property and then Define display subname and then we'll return self.

**7:33:09** · subscription. name of course assuming that there is one if not self.

**7:33:14** · subscription then we'll just return the price or something like that or play I'll just go ahead and say play in and then we'll now go ahead and refresh in here and it should say the exact same thing sure if it does great so the next

**7:33:30** · part is maybe the benefits inside of the subscription price itself so right now the benefits are coming through from this right here and they're all sort of a list itself so there's a lot of different ways on how we can approach this the way I'm going to do it is I'm just going to go ahead and inside of the the actual subscription itself I'll go ahead and do the um let's say benefits or features let's do features and we'll say models. text field and and we'll give a help text of

**7:34:02** · um you know features for pricing separated by new line okay and then we'll go ahead and do blank being true and null being true okay and so with that in mind let's go ahead and run our migration so python manage.py make migrations and then python manage.py

**7:34:28** · migrate and back into the admin here we will now go into our basic plan and I'll just go ahead and copy some of these default values here and if I put it in here notice that it is separated by new lines we'll go ahead and hit save and continue editing okay and then with that in mind I'll go ahead and change this to being defined git features as list and we'll go ahead and return back the self.

**7:35:00** · featured and then or features.it by the new line and then uh we'll do x. strip forx in all of that that will give all of our features as a list and so now then I'll go into my pricing once again I'll go ahead and grab the display features list so grabbing this we'll go ahead and come down into these list elements here so we'll

**7:35:30** · iterate through each one so we'll go and say for feature in object. display feature list display features list and then

**7:35:46** · in4 okay so let's go ahead and make that one inside of our model again so go ahead and just Define display features list and we'll return something of course if there's not a subscription then I'll return just an empty list otherwise we will grab the subscriptions get featured as list so self.

**7:36:10** · subscription. get features as list there we go once again I'll create this as a property back into our pricing card we should see a duplicate now of some of these so if I refresh in one of the plans oh I got none typ being split great that's a good error to see so we've got back up here here they should say if not self.

**7:36:34** · features then we'll go ahead and return back an empty list okay refresh again and so the basic plan has all of the same things all over again uh with these configuration so it's repeating the same thing we'll we'll fix that in just a moment uh but each one of these plans I want to go ahead and change as I see fit but back into the pricing card the reason it's showing the same thing is because we didn't put the Fe feature here just like that and now if I refresh

**7:37:04** · it shows those different features gred it doesn't have the the you know the bold and all that um you know that could be something you could add later or you could just hardcode these things in there's a lot of different options that we have here you could also then just say something like this where you go into your model itself and you could just treat this as HTML the actual

**7:37:26** · feature list itself or features in here you could treat that as HTML I'm not going to do that I'll just leave it as is and then you can experiment with it as you see fit okay so I'm going to go ahead and get rid of a lot of these things in here these list elements we no longer need those refresh in there I'll pause it and just add all those same things to the other Pro all right so I went ahead and changed mine and there are my featured display naturally the

**7:37:51** · price is going to be the next one right so the price being into this object model here we are going to go ahead and grab the object we can do object. price and I'm going to leave the dollar sign in here so object.

**7:38:07** · Price save that and refresh in here now I've got our different pricing now if you don't want the decimal places on there then of course you wouldn't allow for them but I'm going to leave those decimal places on there because some of you might actually want to have them and then the interval in here we also want to show that as well so this could be another one where it's maybe the display interval so we'll go ahead and do inter interval so we can save that and we see that it says month still but if I were to say get interval

**7:38:37** · display that changes it a little bit and it says monthly so it's really up to you on how you approach that so this display value is basically saying Gore the field name display and that's coming from our choices so if we come back into our subscription price here we've got our interval as soon as you add choices in there you can do get you know field name

**7:39:04** · and then display and that will give you this value that's in there as well so it's completely up to you on how you approach what you want to do there and how you want to display those things in the object cards themselves so we can also verify that this is correct with changing the pricing page from monthly to Simply yearly and just take a look at that query set and asse assuming that it actually came through let's go ahead and take a look we've got year not monthly so let's change that to yearly Qs and

**7:39:37** · refresh in here and there we go so now we've got our yearly one showing up although it doesn't seem to be the correct values in here ah there we go our interval choices this should say yearly maybe you caught that before I just caught it so now when I refresh in here there it goes so these pricing it's

**7:39:57** · a little bit wonky but overall I can see that I can now swap between the two so we'll need to make a function that allows for that to happen as well and I also want to change the interval back to just being the interval itself save that and there we go so per year and per month work of course we need this get started button and then maybe you want to have a sub headline in here as well

**7:40:20** · so back into your model for the subscription itself this is probably where we'd put it and I'll go ahead and do our subtitle and it's going to models. charfield or we'll we'll go ahead and say text field actually um and blank being true null being true save that once again make some more migrations and then migrate and then down here with our

**7:40:45** · subscription uh display subname I'll go ahead and do our description or display uh sub subtitle and then that's going to be our subtitle I believe it was dots just the name subtitle there we go uh cool and so now that we've got that we can go back into our pricing card this time I'll go ahead and just say if it's even there then we'll show that so I'll go ahead and put an if Clause here and we'll go ahead and say if object. sub title sub subtitle which

**7:41:18** · is funny but kind of sounds like it's a sandwich it is not we'll go ahead and do an if and then we'll bring this one in save it refresh now none of them have it

**7:41:34** · so feel free to add it if you like naturally this page you probably want to play around with as well or you totally could um but there we go we now have the ability to see our different pricing plans it's just a matter of now implementing this get started method which is something we need to do within the actual stripe processing as well and then we also need to toggle between yearly and monthly because what we could do is we can actually put both of them in here and just show them off right now

**7:42:03** · and that's exactly why I have the different plans the way I do in terms of the query set and also why we put the card in here is because it just makes a lot of sense in terms of how we display

### Pricing Interval Toggle Views

**7:42:19** · it now we're going to bring in these tab elements so that we can actually toggle between the monthly plan and the yearly plan we don't want all of them showing up once we just want to toggle up here so this is going to be done using basically just Python and HTML there is

**7:42:36** · a way to do it with JavaScript that's not something we're going to touch right now and you'll see why as we go forward but the idea being let's go ahead and jump into the pricing tag here and we're going to go ahead and put in inside of right underneath the actual headline here and the text here at SAS we're

**7:42:55** · going to go ahead and put a new div class in here this class is going to be Flex and justify Center we'll see what this does in just a second but then we'll go into flow bite here do a quick search for pill tabs and you'll land

**7:43:10** · here which will give you the UL element here which you can copy that whole thing and we can paste in here now naturally we only need two tabs so tab one and then tab two so I'll go ahead and get rid of some of these other tabs in here now what we're really going to be doing is just turning these into links that go to a new page so basically something like pricing SL monthly or month and

**7:43:35** · something along those lines so that's what we'll need to design here now before we do that though I'll just go ahead and say month or monthly and yearly save that as is and then we'll take a look at our SAS here and so we've got monthly and yearly great so what this means then in my view I actually want to change how I render these things out the way I'm going to do that is by saying interval equals to month for

**7:44:04** · example and then from this interval idea I want to just change these query sets to just being something like object list that object list by default will be the month and so this is now what I'll use inside of my pricing page like that so then in pricing.

**7:44:23** · HTML this will now just be object list and then I'll get rid of the yearly one in here so now we should just have one set in here based off of the interval itself and sure enough we do so with this in mind I now need to

**7:44:40** · have the ability to toggle between what this interval would be so basically what I want to do is I just want to do a quick check and say if interval is equal to well the yearly interval so notice that I've already repeated the subscription price here a little bit so what I want to do then is I'll just say it IV as an interval M Mo as in month is

**7:45:02** · going to be that in inv v r y r is going to be the year one so that it's going to be a little bit easier to reference these things in here so basically I want to check if the interval is the year then I want to do that same query set that I did before this time it's going to be object list equals to that query set and once again I can use the interval year like that so this means that I can now get rid of these Alt together and then the interval month being the default so we go ahead and put that one in there as well just like that

**7:45:35** · and now it's a little bit closer to what I'm going towards which is having the ability to toggle between these two so with this in mind I can actually grab this subscription price view once again in my URLs and I can duplicate this pricing path and then allow for a string to come in here as an interval so now what I can do then is put a trailing flash there put in here as pricing interval and so now with this in mind I can come into let's say year and now it

**7:46:05** · actually should show that year right so if I go into month here it's going to show that month and then if I do one that this does not exist it's just going to go back to the month the default one in there great we don't need a 404 error there we can just show that default month and then we can track at some point we could track the actual pages that are coming through so the next part is the actual URL that are associated to this so you might remember back to our Navar we had this URL pricing here now

**7:46:35** · we're going to actually implement the python version of it called reverse this is actually very straightforward it's just from Jango URL we're going to import reverse or rather from Jango that URLs we're going to import reverse here so the actual URL path name is equal to

**7:46:51** · well we just set it and we said it's pricing interval so that's the path name so then to actually have the different URLs here so we'll go ahead and say the monthly URL is equal to reverse of that path name and then the keyword arguments

**7:47:07** · that we can pass in here so keyword RS equals to well we already see what the keyword argument is in here that's interval so I can pass in the interval itself which is going to be the interval month and that will give me my monthly URL and then if I paste this again I can get my yearly URL so year URL like that and then there we go so now I have the two different URL options in here so month URL and this is going to be equal to that of course and then year URL

**7:47:39** · equals to that great so far so good so what I want to do then is use those URLs inside of my pricing tabs so these tabs right here so this is going to be my month URL and this one's going to be my year URL save that ref ref here go ahead and

**7:48:00** · select yearly now and the price changes the only thing that doesn't change is the coloring on this text here so that's another thing that we can do right now and just basically say which one is active so I'll go ahead and say active is well month so interval month and then

**7:48:20** · active is interval year and then we can just pass in this item in here as which one is active so back into pricing I can now go ahead and say for the class itself we can come in here and say for instance if active equals to

**7:48:41** · month right and actually we'll use single quotes here because it's inside of the class then we can have that same exact class that it was otherwise we'll put the other class in there without knowing anything about these classes and then we can go ahead and do end if save that then I can grab this active clause and put it right next to the yearly one and we can change this to year save that we refresh it here now

**7:49:10** · now I have a little bit of a toggle now this is not ideal because it will reload the entire page but it is something that works for now in the long run we will change this to something called htx where it'll work basically the same way it will just reload this entire little block here when we click one of these buttons and that's pretty much it uh but that will be done later at this point we

**7:49:34** · now want to do this getting started section now that we have the toggle we can actually find the different price that we want now one of the ways we can think about improving all of this is by actually iterating through all of the interval choices the reason I didn't do that is because I know that I'm only sticking to two choices but you can definitely interval you know iterate through each interval choice that just makes the logic here quite a bit more

**7:49:59** · complicated uh but it definitely is possible if you had a bunch of different interval choices and you wanted all of those to show up here like if you did quarterly or something like that um there's a lot of different options there and then you would instead of saying inside of the pricing instead of just saying monthly you would actually get the interval display name that we saw before okay so with this in mind let's go ahead and start the process of actually doing the checkout

### A Django Session Based Checkout Process

**7:50:30** · now we're going to implement the stripe checkout process what this means is our users when they go to select a plan they will be redirected to a stripe hosted page not on our website or on our domain it will go on theirs they will fill out their credit card information they will agree to whatever plan they have and then it'll come back or whatever their payment information is that you set up inside a stripe so there is options for like a there's options for Apple pay

**7:51:00** · Google pay there's options for payment plans there's all sorts of options that are in there that are beyond what our app is offering right here so that's a nice thing about these checkout sessions the other part is it's really straightforward to set one of these things up as you can see right here in the documentation we've got this success URL which of course we'll implement the line items the actual price itself as we

**7:51:24** · see we can add a quantity if we needed to and then we set a mode and that's pretty much all we'll really need to do to be able to capture payment from our customers which is why we're doing this so let's go ahead and start this process what I want to do is I actually want to create an app called checkouts so inside of this app I'm going to go ahead and create three new views here the first one is going to be our product price

**7:51:48** · redirect view I'll explain this in a second but of course it takes in the request and it returns something and then we're going to go ahead and do our checkout re redirect view another redirect view I realize and then the final one being our checkout finalize view okay so the checkout redirect view what we need here is the login required decorator so to grab that we'll do from Jango do contrib and. off do uh

**7:52:19** · decorators we're going to import the login required decorator so we absolutely need login required because in here what I will be grabbing is my users stripe ID so my customer stripe ID equals to the request. user. customer. stripe ID so

**7:52:42** · this absolutely should be something that already exists based off of everything we did to generate this so the reason I have this login required though has to do with this redirect here so what I want here is my subscription price ID

**7:52:57** · here my subscription object price ID that's actually what I want to pass in here but I'm just going to call this my price ID and I'll set it equal to none and ARs and keyword ARS so the reason for this is so that I can actually associate that price ID with this login required and that means I can do request. session and then we'll go ahead and do our subscription price ID we'll

**7:53:24** · go ahead and call it our actual checkout subscription price ID and that's going to be equal to to this right here so then down here what I can do is I can grab that value so request. session doget and then that subscription price ID and basically we'll say if this is

**7:53:42** · none then will return our redirect somewhere else which will be of course our pricing page so we'll need to adjust all of these things so the first thing that I want to do is get the pricing redirect going so we'll go ahead and do from uh jeno URL or shortcuts we'll import the re redirect here I'll put it up here actually okay and so redirect is going to be used a couple of times we probably won't even need render for uh any

**7:54:12** · purpose yet so I'll just go ahead and do this as checkout uh ABC or something like that okay so let's go ahead and Implement these things and then this one wants to be rendered to SL checkout cool so first off we're going to go ahead and come into off here or rather CF home into URLs we're going to implement a bunch of these so from checkout import views as

**7:54:36** · checkout views okay so the first path is going to be the uh Pro we'll go ahead and do checkout and then slash the sub price slash whatever the argument was that we set and that's going to be our checkout view Dot and and then what do we call it we called it the product price redirect

**7:55:05** · view okay and looks like I have this should be checkouts there we go next up I want to give this a name and I will go ahead and separate these things out a little bit so I'm going to name this as you know maybe uh

**7:55:22** · sub price checkout okay so this is where I actually want to redirect everything and the first thing is getting this price ID here we're going to go ahead and press the SR St as the price ID actually this

**7:55:38** · is in an integer so it could be a number right there and so this will then just put that value into the request session and then it'll go to the checkout page which will be this one so I'm going to have errors for sure I just want to print out what this subscription ID is going to look like right now okay so this checkout redirect view will be the next one and then this is going to be checkout start is what I'll call it

**7:56:08** · and this is going to be our checkout redirect View and this is going to be just simply stripe checkout and start and then I'll go ahead and do something like checkout and success which will be

**7:56:25** · our very last View okay so now on my prices I want to actually have this URL always accessible so if we go into our subscriptions into models here we should have our subscription price here so what I want to do is I want to bring in the URL resolvers so we'll go ahead and bring in reverse and we'll do from Jango URL uh

**7:56:51** · URLs import reverse and so what this is going to do then is on my subscription price we're going to go ahead and create a method and it's going to be get the uh checkout URL it's going to take in self

**7:57:09** · it's going to return reverse we need to grab what that subscription price or the actual URL name was which is this right here and then we're going to pass in our keyword arguments here which are going to be keyword ARS equals to and we're going to grab our keyword ARs here which is the price ID being s.

**7:57:25** · ID okay so notice I'm not using the actual stripe ID here I'm just using the model ID itself right so price ID we just want to make sure that that's the correct one great so now that I've got this get checkout URL back into my pricing or rather the pricing card I should be able to do object on here so this is going to be now object. get checkout

**7:57:54** · URL again that method there and then we'll go ahead and select plan something like that great so let's go back into our pricing here select plan and then I get this redirect here okay so I get an error on render checkout that's not correct but we will take a look at what happened with that view okay so back into checkouts here we've got our view couple redirects this should be redirect not return render okay so redirect where

**7:58:25** · exactly well we wanted to redirect to this right here so I can actually use inside a redirect I can use an absolute path I can use an absolute URL or I could use a name just like reverse so I don't have to write out reverse and then use that I can just do something like that and now if I were to refresh in here uh it brings me to that checkout page which gives me a 404 page so we

**7:58:46** · definitely need to implement it um but it actually did this redirect right here and so what we've got here in our print statement the reason I did that is for this checkout price ID so let's try this again now with our actual unlogged in

**7:59:02** · user so inside of pricing here I'm going to go for this basic plan this redirects me to log in to that checkout start now I'm going to go ahead and log in as that user hit save goes to the checkout start does the redirect and what do you know it still prints out that same price that's the only reason I have this view it adds a little layer of convenience when somebody's selecting a new plan on

**7:59:28** · their account it doesn't have to be there but it is pretty cool that it is so now that we've got the plan the actual plan object we're going to go ahead and grab that model itself so so from subscriptions do models we're going to import the subscription price and in

**7:59:46** · here now we're going to go ahead and just do instead of printing this out I'm going to go ahead and do a TR well we'll do object equals to subscription price objects. git ID being whatever that ends up being and so all I want to do now is say try object and accept and now I'll say object equals to none and realistically if this is the

**8:00:11** · price ID is none or the object is none then we want to redirect back to the pricing page which we did give it a name of just simply pricing and so now I'll go ahead and get rid of that slash there and so this will allow me to then if I were to log out let's go back into our homepage here I log out and now I go into slash checkout the URL that we've

**8:00:37** · got so checkout SL start it should redirect me back to pricing once I go through the login process so let me do this and then there it goes It goes now into pricing if I hit select that plan it takes me to the gibberish page great so that flow is

**8:00:54** · accurate but of course we now need to implement the actual process here for this flow and so what I could do is I can print out this customer stripe ID again so let's go ahead and refresh on that checkout page or through the process again I just want to make sure that I also have the user's ID and sure

**8:01:12** · enough there's my customer ID so here is now where I can actually start that process of doing the checkout but I wanted to make sure that this flow was working for this convenience method definitely adds a little bit of work here but overall it makes it I think a lot more seamless when your customers are going to go ahead and buy something the other part about this if the session is active when

**8:01:36** · they do come in here let's say for instance they going to ass sass they go into pricing they're like oh cool I'll do this one they could sign up here and that session should remain active and then they should go right back to that checkout process as well to finish that off also so that's another cool part about putting it into the session like that

### Stripe Checkout Session

**8:01:58** · \[Music\] so into the stripe documentation we're going to go ahead and copy the session create portion which is actually fairly straightforward as well we'll bring it into our helpers billing and we're going to go ahead and Define and this is going to be start checkout session and we'll

**8:02:16** · talk about the arguments in just a second and then it's going to return back uh basically this is going to be the response and then we will return back that response if we say raw is is true okay so we'll go ahead and just say if raw then we'll return back the response otherwise what we actually want to return back is response.

**8:02:36** · URL we'll see what that does in just a second but the idea here is our success URL that is something that should be an argument in here for sure we have a bunch of things that we'll need to do with that so we'll go ahead and bring that success URL here price the actual line items this is going to be one quantity we definitely need that but I also need to get my price stripe ID whatever that ends up

**8:03:04** · being which of course there is an example right there I'm not going to bring that in just yet great so now I've got my line items the mode itself is not going to be payment but rather subscription and so there are a bunch of different modes you can look through and I'm sure there'll be more in the future but if you go into the create session and scroll down to the mode itself you can see the different modes that we've got here in our case we are just going to go ahead and do the subscription you can also grab their payment details and then do a subscription later uh as

**8:03:37** · another process that you might want to look into to advance it a little bit so the success URL is one thing I also want to have a uh return URL or cancel URL in here as well so let's go ahead and take a look in the arguments here we've got this return URL too after they authenticate or cancel their payment right so let's go ahead and bring that in as well and that's just going to be our return URL just like that now the big one is our customer ID that is

**8:04:06** · definitely something I'm going to want to pass in here so I'm going to go ahead and bring bring it in as the customer equals to that customer ID you can create one of these sessions without a customer but a big part of the reason we have this checkout process in this way so we have that login required so that we definitely have a customer ID already going and that's the big part here so there we go we've got our session itself which is going to take in the success URL the return URL and so on so one of the things we do want to check with our success URL is actually going to be that

**8:04:39** · it ends with a specific value so basically I'm going to come in here and say if success or rather if not success URL ends with the basically we want to grab the session ID as part of the redirect which is this right here that's what we want to make sure that it ends with and then we'll go ahead and add if it does not end with that we will go ahead and add it in to make sure that it is in there now this process this

**8:05:10** · combination probably be should be something that we improve on later and notice that I have curly brackets and checkout session so when I try to do an F string here it actually doesn't allow me to do that because this is not a variable I defined inside of python so what I'm going to do is just put it like this this right so I'm going to add in I'm going to do concatenation of these strings instead of string substitution and that's what's going to happen then we'll have a better success URL so with

**8:05:38** · this in mind we'll go back into our checkout and we're going to go ahead and import the billing process so import helpers billing and then we'll come down into this checkout redirect view we've got a few items in here that we can use now so we've got helpers billing and then start checkout session the customer

**8:05:58** · ID is already in here okay so we've got our customer ID we want to do our success URL well I wanted to go to this checkout finalize view so in my URLs we've got this you know checkout success in here so that's going to be the success URL path that's going to be the initial path we're going to go ahead and do uh reverse for this one and that's going to take in the URL

**8:06:23** · name so we'll go ahead and grab this real quick and then I'm going to go ahead and make sure I bring that in from the Jango URLs package import reverse okay so that's going to give us the path but the success URL base is going to be equal to https or HTP col Local Host and then 8080 or

**8:06:49** · 8,000 that's what we've been using so this is now my success URL so my success URL is going to be equal to combining these two things once again I can use the F string in here so the base plus that now I did say that we should probably have the you know session ID in here as well but the start checkout process will append it for us with how this works so I actually don't need to bring that in so I'll just put my success URL as that and then for my

**8:07:21** · cancel URL it's going to be similar to the success URL base but instead of being here I'll just go ahead and do my pricing URL path and that's going to be of course in here as pricing which you could verify if you wanted to uh but the idea now is not cancel URL should be return URL that's a little typo there so return URL is going to be equal to the success URL base plus the pricing

**8:07:51** · path URL and then we've got our return URL great so what's the last thing back into our building it's going to be the pricing stripe ID whatever that price stripe ID is going to be we'll go ahead and grab that from what do you know the object the price object itself and then stripe ID and now we can pass that in as

**8:08:14** · well and what this should do if we say raw equals to false we should be able to get a URL from this and then redirect to this URL now assuming this all goes well well we will take a look at what actually comes back on a session call in

**8:08:32** · a little bit the actual raw response we will look at shortly uh but the idea being that this will start a brand new session for us the other thing is the success URL should probably not be written this way so what I'm going to do is I'm actually going to go into my CF home settings and what I want is an actual URL for our domain in here so

**8:08:54** · let's go ahead and go into ourv and let's just check if we have anything we do not so what I'm going to do here is say base URL is equal to http Local Host 8000 so this base URL is going to be inside of my settings in here and I'm

**8:09:14** · going to put it right under right by allowed hosts and we'll do config and base URL default being none this of course would cause an issue when we deploy it so we will need to put that on there at some point something like this would be in our base URL and so with this in mind back into our checkouts we're going to go ahead and do from Jango doov import settings

**8:09:37** · and then we'll grab that base URL from our settings okay and so this is going to be the base URL now great so naturally I don't need to put the success URL at all or that success URL base I can just use that base URL again okay now let's see if this work

**8:09:57** · Works let's go back into our hungry pie user into pricing what should happen here is I should be able to select this price this Pro Plan at per month and it should be able to redirect me into stripe so I hit select naturally I need to log in which is great so I see the login process I log in and we get this

**8:10:15** · invalid request error and it looks like it can only be used in the mode custom or embedded so it looks like maybe we just grabbed the wrong setting going back into stripe into the session here into create session under checkout let's go ahead and scroll down a bit and we can see return URL oh sure enough it says embedded so cancel URL that's the one we were looking for so let's go ahead and go back into all of the different places where return URL was written and change it to cancel URL

**8:10:46** · that's a small little typo that's really easy to fix but it is important to get the arguments done correctly okay so now with that in mind let's go ahead and jump back into our hung user we can even probably go back to checkout start and all of that process should work and now we're at the point where we can subscribe to the propan per month as we see here the test card is 42 42 repeated

**8:11:12** · just like that you need to make sure that you have a valid year so you can use 4042 or whatever put in whatever here I'll put in ABC here whatever zip code that part doesn't really matter so much I will not save it notice that it's got my customer email already in there I can go ahead and hit subscribe this should actually subscribe this user and it takes us back to this URL here notice in the URL at the top the actual path does have this session ID here so that

**8:11:44** · variable was added for US based off of this single argument here that is something that's built into the stripe checkout process now the reason for that is so that we can then handle it in our success page so in this page right here we will handle it right now we haven't had that set up and we will do it shortly but the idea now is if we go into stripe go into our customers go

**8:12:08** · into that hungry pie customer we now see that this Pro Plan is active and we can see everything about it pretty great so we now have that subscription process working and of course if I wanted to change the plan or get a different plan

**8:12:24** · I could come in here go back into pricing go to the Advanced one and this will take me through that same checkup process again and here we go so it's in that advanced Pro Plan once again I would have to actually add in all my credit card details or any other payment methods that you might have and boom that would happen if I hit back here it takes me back to that pricing page so that's like a cancel event that ended up happening and there we go so we are now

**8:12:51** · ready to handle when this checkout process happens and what happens when it's success uccessful so we left it off where the checkout process ends in this you know page doesn't exist but it does have the session with things related to the checkout so what I want to do now is I actually want to unpack what's happening with that by grabbing the original checkout session itself so inside of our bilding module here we're going to go ahead and Define get checkout session

### Stripe Checkout Finalize View in Django

**8:13:23** · which will take in the session ID and then basically raw being you know true or false so basically what we've seen a number of times now so I'll go ahead and come in here and do something for this and we'll just go ahead and give our response and then we'll set it equal to

**8:13:41** · well let's go into the docs for retrieving a customer session so in check out under sessions retrieve session and there we go very simple we'll go ahead and paste that in and then I will go ahead and do something like that great so I'll just pass say that session ID as the argument no surprise there um and so I'm actually going to copy this same sort of idea with get

**8:14:09** · subscription because if we go into our session itself what you'll see in the response here is you'll see something for our subscription subscription being null so the reason it says null in this example is because well there's a lot of different things you could do with a checkout process and so in the billing

**8:14:28** · process we want to go and grab subscriptions and then we want to go ahead and retrieve a subscription here which is the same exact process which is why I'm doing it now so this is instead of this we'll just go ahead and say the subscription itself in fact I'm going to change this from session ID to just simply stripe ID so it's like a little bit easier to reuse these values here okay great so now let's go ahead and get our session checkout uh so in this finalized view here I'm going to go ahead and grab the session ID from the

**8:15:02** · request.get prams so I can do something like this this of course is going to grab this value right here which yes you can absolutely modify that you can change that as you see fit and in order for you to change it you just need to make sure that when you start that checkout process the session ID or that argument that you're using is changed as well but in our case we're going to go ahead and stick with just session ID here and then what I want is of course my session response which is going to be

**8:15:32** · you know helpers billing. git and or rather not git but get checkout session of this session ID and then I'll go ahead and say raw is true for right now from there I'm going to go ahead and grab my subscription or

**8:15:49** · we'll do our subst stripe ID and that of course is our subscription ID so I'll do do subscription here and then I'll go ahead ahead and grab the subscription response so we'll do our sub response and this is get subscription and then passing in that subscription ID great so I want to render out both of those values the actual raw response so we can see what those look like and so what I'll do then is return uh we'll do our request and then I'll call this checkout and success.

**8:16:19** · HTML and then we'll pass both of those things in as context items here so we'll go just do our context and we'll go ahead and do our subscription is subr and then our checkout is

**8:16:37** · session R maybe that should be called checkout r as in checkout response let's just do that great so now with this context we'll bring it in let's go ahead and create this template now and inside of here we'll go ahead and bring those two items this of course is going to be a lot like home.html so let's go ahead and just copy that and I'll go ahead and say success welcome or something like

**8:17:03** · that and then bring in those two values so the subscription we'll put first and then I'll put it into a div and then we'll repeat that all over again and I'll just put the class in here as a margin bottom let's try 12 maybe that'll work maybe not because of

**8:17:23** · Tailwind but I'll go ahead and bring in check out there we'll save EV that and I'll Refresh on this page it brought a lot of stuff and now it has a lot of data in here it's kind of hard to read as to what's going on so we can we could do a bunch of different things for this but I'm just going to go ahead and print it out in the print in the actual terminal itself so we can see those responses in here as well so print subr and then before that I'll go ahead and print the checkout R just like that so I

**8:17:51** · save it and refresh on this page again once again that session ID is still there we can always save that session ID but what we can see is if I scroll up a bit I will see the checkout process and you can see that there's just a lot of data that's coming through here which is pretty cool we see the checkout itself the checkout process has that cancel URL in there it's got created it's got

**8:18:13** · custom text the customer itself which is actually really nice so notice I don't have the login process going on so what I might want is my customer ID so I'll go ahead and do customer ID equals to check out R do customer and that is going to be our the customer we end up using and then if I scroll down a little bit more to the subscription itself we will see that it has cancelled related things related to canel we can see that the billing uh related start period is

**8:18:45** · current period end current Period start we have all sorts of items in here one of the other main ones that we might want though is the actual plan so we can do this with the payment plan so this is the subscription plan rather so if we do subscription plan equals to the actual subscription so subr do plan that's this

**8:19:09** · value right here and the reason we have that is well because of the price the plan itself is not like has its own element it has the price itself and then the product itself so the price that we're working off of from this so in other words we've got our now our subscription plan price stripe ID and this is going to be our sub plan.

**8:19:31** · ID now we can also verify this in the documentation as well so if we go into the documentation under plans here and retrieving a plan we will see hey there's a plan ID here that's a little weird that's not what we got on this plan so where is that plan ID it works a

**8:19:51** · little bit different so this because it says price underscore we know it's related to the the actual price that we're paying because this is a subscription this is not a plan plans are like older subscriptions I think you can now use the model this is backwards compatibility so it's not the same thing that's I just wanted to point that out in case you were curious about it so when we retrieve this subscription and we go through all of the different things in the subscription object you will see something in here related to the plan itself um which you could

**8:20:22** · scroll through and eventually see something related to it uh but the point is that the those aren't the same we see that this price ID and what can we use that price ID for well think about back to where that price came from we can now

**8:20:37** · go into our model here and we can see subscription price and that is going to match our stripe ID now you don't have to take my word for it you can just test it out with me right now so let's go ahead and do that I'm going to go ahead and grab our subscription price what do you know it's already in there so scroll down a bit here and we're to grab our price ID which is this right here so we'll grab a query set and that's going to be our subscription price. objects.

**8:21:03** · filter and we'll go ahead and filter out to the stripe ID being equal to that exactly and now I'm going to go ahead and grab the price Qs and we're going to go ahead and now print that out instead of everything else we'll save that and then we will Refresh on that page again and we'll take a look at what gets printed and what you know there's that query set now we are going to definitely

**8:21:30** · do this in the next part but the main thing here is now that we've got this subscription price that also means we have access to the exact subscription which also means that our actual user subscription can now be correlated to what they're paying for of course we still need to do it but the idea is this checkout process allows for all of that now I want you to keep in mind for just a moment if you went through the process

**8:21:55** · of correlating these things things we have all of the detail here basically coming only from stripe all of the detail from stripe can now correlate the active subscription for a user the only detail that's not from stripe is the actual you know plan in our own database so that of course would be another step that we would need to do but the fact that we have this checkout finalized view with that price data is a huge part

**8:22:19** · of this as to yeah we're almost really really close to tying these things together so let's go ahead and see how that be done now now we're going to go ahead and update our checkout finalized view so that we can actually associate the actual purchase with the user subscription but what I want to do is refactor it a little bit based off of the things that I absolutely need so the

### Successful Purchase to User Subscription Model

**8:22:45** · checkout session I probably don't need I really just need the customer ID so we can get the user object and then I also just need the plan whatever the price plan stripe ID so we can actually get the subs sction object so those are the two main things because thinking back to our user subscription we've got user and subscription that's all I need right now all of the other data I could probably sync but in terms of finalizing a purchase I don't need to sync anything else just yet we'll do that part in the next one so for now I'll go ahead and update the actual calls here so I don't

**8:23:17** · actually need these two things I need just one of those two things so I'm going to go ahead and copy what I'm doing in this request into billing now I'm going to go ahead and do Define get the checkout um user or customer and

**8:23:32** · plan that's essentially it and it's going to go ahead and do some of these things in here so the first step here is going to be passing in our session ID I can use that get checkout session so it's basically calling the same function then of course I can go ahead and grab that customer ID there there we go so that's going to be our customer we don't really need anything else next is getting the subscription itself from that and then of course we get our plan ID great those are my two values so

**8:24:03** · we'll go ahead and return that and I'm going to return it in the order of customer and then plan so let's go ahead and just return the customer ID and plan ID okay that's all we need great so from this I'll go ahead and come back into my view now and we'll go ahead and use those two values so customer ID and plan ID equals to helpers do

**8:24:34** · billing dogit customer plan and then we'll just do our session so now I can actually clear or make these things a little bit cleaner so it's a little bit easier of A View to work with overall okay so now we've got this subscription price of course this is actually something I want to change I'm also going to update my context I don't need that context in there anymore so what is

**8:24:58** · it that I actually want I don't want the subscription price I want the actual user subscription related data which means that I need the actual subscription itself from the price so the nice thing about this is back into our view what I can do here is I can import the subscription Now using D jango's related lookups what we can do is we can actually say try we'll call this our subobject equals to subscription. objects.

**8:25:26** · git now this git call can actually go related to the subscription model price right or the subscription price Model so if we do subscription price like this and then I grab all of that data after two underscores here this allows me to do that related lookup and then I'll do an exception here and then just do SUB

**8:25:47** · object equals To None okay so this subscription object itself let's go ahead and take a look let's just verify the logic here for the lookup itself so if I scroll up a bit I've got my subscription object granted there's no field directly written on here for that

**8:26:03** · subscription price but of course if I scroll down I see subscription price in here and that does have that field so this allows for that reverse lookup that reverse relationship in there if you weren't already aware of that and putting it into a tri block is just saying hey this should absolutely exist if for some reason it doesn't exist we'll just said none but at this point there's no way that this price is displayed if the subscription itself doesn't exist unless for some reason you delete it right at that exact moment um

**8:26:32** · which could happen of course which is why we have the exception in here okay so that gives us our subscription object in here great so I no longer need this price query set at all next of course we need the actual user object from the customer ID so to do this I'm going to go ahead and jump back up and we'll go ahead and do from D Jango do contrib off we're going to import our git user model and then we'll go ahead

**8:27:00** · and use that user model just like that okay great so now we can scroll down keeping this same logic where we can do this lookup this related lookup here I can go ahead and say user and this is not our sub object we'll go ahead and call it our user object once again if it doesn't exist then we'll have this error now the related field is going to be for this customer ID what is this right here well

**8:27:25** · it's going to be the customer model so I can actually look for the actual user based off of this related field which of course is what we're doing so going into our customer model here there's our user and that's how we're able to do this related field great so in the case of

**8:27:40** · our subscription here the related field will only have one stripe ID with this plan which is why we can do git in other words I don't need to filter It Down based off of this plan ID because these plan IDs are unique that's the same with our stripe customer ID the these values

**8:27:56** · that we're looking up by are unique values so there's no way that we'll have multiple objects of it which would mean that we have to do something a little bit different if we did but now we have the conditions we've got the sub object and our user object those conditions are now in place that we can then update or create our actual user subscription so

**8:28:18** · what I want to do then is back into this view here we want to import it so I'm going to get rid of the subscription or actually bring in the user subscription right there and then we'll go ahead and come back down and so I want to import this and basically what I'm going to be doing here is user subscription.

**8:28:34** · objects. create and the user equals to the user object and then the subscription the lowercase subscription is equal to the sub object right and so that's actually what I want to do but the only way I'd want to create this is if it doesn't already exist remember the user subscription itself self as a one toone field so if it already exists this

**8:29:00** · would cause an error so in other words what we're going to do now is I'll say my uh user sub object equals to and actually I'll put an underscore under it as well just to make sure it's definitely distinguished from the user object the user subobject is going to be equal to user subscription. objects. git

**8:29:21** · and then it's going to be user equals to the user object so this should get our user subscription object if it exists if it doesn't exist we need to go ahead and create it which is what that next step does now of course the way we do this is in a tri block as well so we'll go ahead and do try and our user subscription object and then we'll go ahead and do an exception and then our user object here but the thing is we don't want a general exception in this case we actually want to check the user subscription that does not exist so this

**8:29:54** · exception will handle in the case that this does not exist then it'll go ahead and run whatever's next otherwise we'll go ahead and just put an exception and say our user subscription object is none so now if this this or this is none then

**8:30:10** · we need to return something for it so we'll basically say if none in the list of these values so this and this and then of course this and then we'll go ahead and return a h P response of some kind so let's go ahead and bring it in from our views or for our views and then we'll go ahead and do from Jango HTTP we're going to import

**8:30:39** · HTTP bad response okay so uh there we go there was an error with your account please contact us all right now

**8:30:55** · let's actually try this out so with our hungry Pi user I think we already have some user subscriptions in here cuz we did some tests for it uh but we can actually try this out and what it should do is attempt to get this user account but here's one of the the things that we didn't actually do is adjust the user count if they were you know actually existed already so I'll go ahead and say uh you know uncore user sub exists being true

**8:31:26** · and then if it does not I will just go ahead and say user sub exists being false okay so both of those things will handle the different Tri block exceptions and then I'll go ahead and say you know if the user sub exists then

**8:31:44** · we'll just go ahead and grab that user sub object which grabs the actual instance itself then we set the subscription to the subscription object which we have up there and then we'll go ahead and save this great so again we

**8:31:59** · check all of the exceptions here so if there are any nonone errors here these two are fairly straightforward because they grab the instance itself if it exists this one right here might be a little bit more complicated but if any of them are none it'll just say it's a bad request assuming that there aren't none then we'll go ahead and come in here and we'll see what happens there okay so let's go give this a try we'll navigate into our project here run the server and then I will navigate to the

**8:32:24** · incognito window where I should still have my hungry pie user in and sure enough I do so I'm gonna go into pricing and I'm just G to grab the basic plan here and let's go ahead and grab that and then let's complete this off okay so I just paused it and filled it out processing and so if everything went well this is going to go ahead and take us back and success welcome is looking good next we just need to check in the admin that sets the correct subscription

**8:32:52** · so we go into user subscription here I have one object at hungry pie at basic plan so let's go ahead and do it again but this time I'm going to go ahead and change what this user is which we'll go ahead and do the advanced Pro Plan for example and let's change it to yearly Advanced Pro Plan yearly go ahead and select this plan it's quite a bit more I

**8:33:14** · filled it out hit subscribe and if everything went well it goes back success welcome great we look at our admin here and refresh Advanced Pro Plan very good and then of course this also means that the user itself should be uh should have those permissions and be in the correct group itself fantastic so this is working

**8:33:37** · really nicely but of course we still have kind of a major issue this is great for the checkout process to make sure the user subscription is correct but what it's not checking is stripe so inside of stripe if we go to that customer and we see this customer has a

**8:33:56** · lot of active plans in here so naturally what we want to do is remove those active plans so whatever's in there and so the question is is how are we going to go about doing that well part of it could be oh well in here if the object does exist then we want to cancel that previous subscription which is probably correct like actually in this process canceling that subscription then also we

**8:34:20** · want to have a regular check of canceling old subscriptions as well so realistically the question is do we want just a regular check of canceling old subscriptions as the default and then once in a while actually canceling subscriptions itself so realistically right here I want to go ahead and cancel old sub and then or verify it's canceled and then go ahead and assign new sub so

**8:34:47** · in here we still need to do that which is something we'll do then in addition to that we will have a process in the next section that will regular ly cancel old subscriptions or clear them all out so we'll see how to do that very soon uh but for now this is a good

### Auto Cancel Subscription on New Plan

**8:35:06** · start all right so now in order to be able to cancel the old subscription I need the actual subscription ID itself now to do this it's going to be fairly straightforward if we jump into billing here in our get checkout customer plan we actually did get that subscription ID right here we just never returned it so I'm going to go ahead and return it as part of this git checkout subscription plan so that back in My Views I can actually use that one as well and I'll

**8:35:32** · just call this the subst stripe ID that works so then down here now I want to go ahead and set that to my user object and we'll call it stripe ID and it's going to be equal to that sub user object right there and I want to put this in both places if the subscription exists already or if we are creating it for the

**8:35:53** · first time so this means then in my models I'm going to go ahead and create the stripe ID as an argument and I'll just go ahead and copy the exact same thing I've done before so we'll go ahead and bring this in and put it into our stripe ID right here okay so one of the things to think about as well is if we do have the stripe ID in here I could actually use the post save as a method to cancel the subscription as well so I

**8:36:20** · don't necessarily have to do it in the view but the reason I'm doing it in the view is just to make sure it does happen in the same process the same request so that it's not necessarily needing additional Discovery so in other words if the cancellation fails then we should be able to get a response of some kind or some sort of error so the user would be able to update their subscription as we see fit or you know basically how that's going to handle okay so with this in mind let's go ahead and create our migrations now so python manage.py

**8:36:51** · make migrations okay okay and then python manage.py migrate okay and so mine says no none to apply because I've tested this out a little bit uh but you should have your stripe ID as a field now so what I want to do then is I just want to sign up with a new an account with my user so of

**8:37:12** · course going forward this is what it's going to end up looking like so when they sign up for an account they will actually have that stripe ID in there so I went ahead and filled everything out I'm going to go ahead and subscribe now and of course this will give me a new plan for this user if everything went well I'll give this success welcome great so that's a good sign so back into our actual model the admin itself for

**8:37:33** · this user subscription what we should see now is the sub ID here and so this is something we can use then to cancel that subscription and it's also very very straightforward so the way we're going to do that of course is inside of billing I'm going to go ahead and copy this git subscription here and just call it cancel subscription and then we'll put cancel

**8:37:53** · here now one of the other things you might want to have is a reason for why it's being cancelled that is something you can grab from the user in our case we are going to put it in as a reason that's automated so we're going to use these cancellation details in here so cancellation details as another argument and then will'll show these child parameters here we can do different sorts of feedback items in here as far as that um if you wanted to in my case

**8:38:21** · I'm just going to go ahead and put the comment so we'll go ahead and say comment equals to the reason this should be a comment is equal to that reason and then if I need the feedback as a requirement it doesn't show if it's required or not I'll just go ahead and say other for now um obviously you could change this as well so feedback let's go ahead and say other and I will put in

**8:38:52** · feedback as other by default okay there we go so now we've got this cancellation reason and we should be able to cancel this user now we don't necessarily need to invoice them or Pro rate them for the remaining credits but it's definitely something that you might want to do depending on how you're doing this cancellation process so that's another thing as in if they stop your sass and they want to refund right now you can prate it on that refund right

**8:39:20** · then or you can just say oh it ends at the billing period which is what we're going to do by default okay okay so with this in mind let's go ahead and add in this cancellation process so naturally the old sub ID so the old stripe ID is going to be equal to the current one whatever the current one is prior to this right so that means that the actual object itself is grabbing it here right so this is before it's set with the new one then I can go ahead and use helpers billing and then cancel subscription

**8:39:51** · we'll bring in that old stripe ID it really I'll also go ahead and say if old stripe ID is not none something like that then we'll go ahead and give our reason being that auto ended new membership okay and then if there is a feedback item in here let's go ahead and just look we've got customer service low quality no no no switch service no none

**8:40:17** · of these reasons are real or valid for what's actually happening it's switching plan which is not in here it's just other okay great so there we go and I'll actually put that in there as feedback being other actually all lowercase

**8:40:33** · other cool so let's go ahead and try this out now and the first thing I want to do though is I want to verify in stripe this users subscription which they have a mini so yeah we'll have to figure out how to get rid of these old subscriptions soon but the basic plan this should be the one I just did so let's go ahead and change it to something different I will go ahead and make it the yearly Advanced Pro Plan once again and I'll fill this out and there we go

**8:41:02** · subscribe and then if all went well it will subscribe it to the new subscription and cancel out the old one so yes it subscribed we refresh in our customers account here and hopefully that old one will say uh that it's canceled uh it doesn't show it right there but there it is cancelled great so

**8:41:22** · all these other ones need to be canceled as well of course but the main one is this right here so what we have here now is something that's fairly nice in terms of our user subscription we have the current active one whatever that might end up being but what we don't have is a way to ensure that it is still active we

**8:41:40** · don't have a way to check that it's still active so there's a couple different things on how we can Implement when the subscription status changes so for example the next billing period ends in 2025 it gets charged again they're still active but if it didn't you know get charged again and they are now inactive we need to make sure that our system is constantly checking for that and also constantly checking for

**8:42:04** · any mistakes that might have happened with subscriptions as in some of these other ones should also be cancelled and we should just regularly check to make sure that there's really only one active subscription if the actual process has been activated on the user subscription here and so what I also want to do is this Boolean value May maybe I also want to say uh user

**8:42:28** · cancel something like that and the default being false because when I do want to toggle this I want to turn this off as in the user canell being you know they just canel it so we we they don't have any active subscriptions whatsoever so once again I'll go ahead and migrate that and then we will go ahead and add this in to this process as well so user sub exit or object

**8:42:55** · user cancel being false right we probably don't need to put it up here unless our default was true but let's go ahead and add that in as well and here we go okay so right away I'm starting to see a lot of parameters that are being reused in both places so basically what I want to do now is just modify this a little bit and say uh user sub

**8:43:24** · options or we'll just go ahead and call it sub options and we'll take the subscription itself so we come in here and do subscription and there we go and then the stripe ID and stripe ID and then user

**8:43:40** · cancelled being false and the stripe ID should be the subst stripe ID there we go so now we've got that I'll go ahead and unpack this now here and then I'll go ahead and do a you know an iteration in here as well so we'll go ahead and do four key value in those items then we'll go ahead and do set attribute for that user object based

**8:44:04** · off of those key value Pairs and then I'll get rid of that of course the reason for this is because if you add additional Fields into that process for that model we want to make sure that we are adjusting all of the fields in both places and that's really what's happening here so uh we'll go ahead and say updated sub options or something like that and go ahead and put those in like that

**8:44:29** · great let's go ahead and give this a shot once again with our pricing model here and I'll go back to that basic plan filled everything out processing it and what we should see of course is the plan actually coming through everything's good we look back into our subscriptions here so we can change uh what we're looking at here with canceled and there's the canceled one which just happened as well

### Adding Subscription Billing Period Dates

**8:44:58** · all right so if we were to refresh on our success page enough times we'll get this invalid request error so this of course means that it's trying to cancel something that just simply does not exist so what we can do is just put this into a tri block for now and then basically allow it to be try or if there is an exception we'll just go ahead and say pass now of course the reason for this is because this is probably not the long-term method on how we're going to cancel all of the previous or historical

**8:45:28** · uh subscriptions we're not going to worry about that just yet instead what we're going to do is we're going to start the process of having the start and end time for our user subscription for this particular model itself so the way we're going to do that now is of course if I refresh on this page it should give me the success as welcome because it's attempting to cancel something that just simply doesn't exist anymore so that's important the other part that's important is basically if

**8:45:54** · the actual subscription ID if those things are the same then we want to skip it as well so same uh stripe ID is equal to this being equal to that there we go and then basically say and not that they're not the same

**8:46:17** · that would be another thing to just verify that that's the case cool because we don't want to cancel the subscription that we just added especially if we're Sav these things and then constantly re refreshing in here so in our user subscription object now we want to add in whether or not we've got the time stamps available to it so in our billing here if we think back to getting our subscription there's a few other fields that come in in play as well one of them is the current Period start the other one is the current period end okay so

**8:46:49** · again this is still the checkout process that's the important part of this is getting the current period started end we want that as a part of the checkout process similar to what we had down here so what that means is I'm actually going to set some new data here as the response so the first one being the customer ID we'll keep that in there the next one being the plan ID we'll go ahead and just use that one a little bit differently now of course the sub stripe ID in here as well and then the last two

**8:47:19** · are going to be the current Period start and then the current period end and of course we need to set those ones which is going to come from the sub response itself and then we can go ahead and grab that data and now this is what

**8:47:35** · we return now realize that I'm starting to expand on this and it's getting closer to what the view of originally was in the first place but the point here is the ability to make sure that we get all of the data that we need so in this instance here we're going to go ahead and say that our now billing data or our checkout data is equal to that which is all this stuff right so now I'll go ahead and grab my plan ID is equal to the checkout data doget and plan ID this value right here so now

**8:48:07** · we've got that next one of course is the customer ID which I will also grab from the checkout data and similar thing great and then the subst stripe ID also from that checkout data as well

**8:48:23** · assuming that it's all correct here and there we go let's just make sure that I have no other errors in here looks like we're good as far as things being missing of course the next ones are the current Period start and the current period end but before I use those I will go ahead and grab them and do our checkout data doget that and we'll

**8:48:44** · repeat that for the end one and then what we want to know about the current period in and the current Period start is I just want to bring it into my update sub options here so we'll go ahead and do that current Period start and then current period end okay so the important caveat about this is these are actually timestamps by

**8:49:10** · default so inside of this checkout process we want to convert them from a timestamp to something different so I'll go ahead and grab this and repeat this process again

**8:49:26** · and we'll go ahead and put it here and here okay so the reason for this is so that we can change it from a timestamp to something different so inside of helpers we're going to go ahead and do a date utils here and then we'll go ahead and import our date time class or module rather and we're going to create a function and we'll call it time stamp as date time

**8:49:54** · and this takes in a timestamp and it's going to return the date time. dat time from timestamp and it's going to take in that time stamp argument and then we'll set the time zone equaling to date time.

**8:50:12** · UTC okay so if you're not familiar with this process it takes in an integer which is what the time stamp will end up being and then it returns it as a python datetime object the reason for this is going to be very clear in just a moment so inside of this billions util here we'll go ahead and bring that in so we'll do from do import date utils and then coming down into that same part we will go ahead and change these to date utils and Tim stamp as date time just

**8:50:44** · like that great and there we go okay so with this in mind now what we can do in our model is set date time fields for these so we will use the same field names I'll explain why in a second but we'll use the same field names and we'll do current Period start models. dat time field and we'll go ahead and say Auto now being False auto now add being false

**8:51:15** · blank being true and null being true okay so there's that I'll go ahead and copy this and repeat it again as end now another thing that I want to do is actually my original start period so very similar to our current one but add in original in here as well now the

**8:51:34** · reason for this is so that I can see how long this user has been subscribed to this or subscribed in general at this point it won't really take a couch to when the actual plan changes but rather how long have they been subscribed so in here we'll go ahead and then say our save method we're going to do self and rs and keyword ARS like we've seen before and then I'm going to do my super call of save and then ARs and keyword

**8:52:03** · ARS okay so what I want to check is if the self. original is none and we'll go ahead and put this into parenthesis and then something like the self. current Period start is not none then we'll go ahead and set this equal to that value there we go okay now with this in

**8:52:32** · mind I should be able to actually track the time as to when it starts so our update sub options this should now save it inside of our account which is great so then I can see that duration for at least the current building period but also from like when I actually started as being a subscriber of some kind okay so now I'll go ahead run my python manage.py make migrations and then python manage.py

**8:53:01** · migrate and there we go okay so mine actually did migrate before I just did some tests let's go ahead and try this out now so what I need to do is I need to add the fields in my user subscription object here now mine actually already have some because I've been doing some testing here so it's already in the database but in your case it probably won't unless you go to this checkout session again and just refresh in here what what this will end up doing of course is well give us errors if there are some so in my case I have one for that customer ID so let's go back into that view here and it looks like

**8:53:33** · maybe our customer ID was not added so we've got our customer ID ah yes this the whole data block needs to go okay great let's refresh again in this checkout process and that should actually update your timestamps so if you go in here that will update it accordingly so I'm going to go ahead and try this again just to see what ends up

**8:53:54** · happening in as far as my subscription is concerned so let's go ahead and go to pricing change it to a different plan alog together I'll save this this is now an annual plan filled out all that information I'll hit subscribe and let that run and now into our user

**8:54:10** · subscription notice that I have it as just a monthly plan here current Period start is today and it ends in a month if I refresh in here assuming everything went well it ends in a year now so I just refreshed and that's that's that so pretty cool now we've got all of that working and now we have the dates available for us

**8:54:30** · now before I go much further I will mention something about the checkout session start process now that we have these dates and we have the ability to reference our previous subscriptions if there is one like this right here we could actually do something very similar to that and adjust when the billing

**8:54:49** · period starts so I'm actually not going to do this because it adds a layer of complexity that's outside the scope of this one and it may be something you may or may not want to do but in other words we've got this billing cycle date in checkout which means that we can actually add in an anchor as to when the billing cycle actually changes so for

**8:55:08** · example if you have an annual subscription that's already running and you want to change it to a monthly subscription when that annual one finishes there's a way to delay that process in this checkout redirect view we can actually do it in our check session so inside of the billing helpers of course when we go to getting the checkout session here starting this process in this right here we can add in

**8:55:35** · this additional subscription data for this bilding cycle anchor notice that it is a timestamp which would come directly from your model and most likely at the current period in so You' basically turn that into a timestamp so what I can do then is I can actually bring in a property method in here and we're going to Define billing cycle anchor so save that itself and then we'll go ahead and say if self.

**8:56:02** · Curren period end um then we'll go ahead and return self. current period end. timestamp and then we'll turn that into an integer right there actually that should probably be the default so I'll go ahead and say if not that then I'll go ahead and return none

**8:56:25** · okay so we could then use that building cycle anchor if it exists in the session create call once again this is just something that's optional but it will allow you to um you know let's say optional delay to start new

**8:56:41** · subscription in stripe checkout and I'll go ahead and reference this documentation in here as well uh just so that you have that if you ever want to come back to it uh as for some reason but the main thing being that it is a timestamp and you would have to update the checkout process here for that um so the big thing though

**8:57:03** · realistically is if somebody were to contact you one of your customers like hey I wanted to downgrade my subscription you could get go ahead and say okay go ahead and do it now and then you could just delay the next bill to a year and a month or whatever duration it is plus the bill that they just took uh

**8:57:21** · you could always change that as well uh there's a lot of different options on you can think about that and that's where the nitty-gritty of each SAS application or each company is going to handle that process differently uh because you might also just want them if they change their plan they charge us today and then that's their plan there's no pration there's no additional uh savings or whatever uh in that in that

**8:57:42** · process but again you could always refund them the difference if they were to change their plan and they wanted that pration so there's a lot of caveats that happen there which is why we're not doing it at this point so yeah uh but we do have the next part is really just verifying and ensuring that all other

**8:57:58** · subscriptions that are happening here all of them are deleted on a regular basis or they're insured to be deleted and we should also have something that checks hey something's going to come up your building's going to end soon so maybe we want to send an email to them for that as well so we need to start that process now first we'll handle some of the logic and then we'll start implementing it in a way that I think is pretty

### User Subscription Status Field

**8:58:23** · cool now we're going to go ahead and Implement a way to ensure that our customer only has one subscription and so that means that all of the other ones should be marked as inactive or at least cancelled so that's what we're going to do now the way we're going to do this is by going back into the user subscription and we're going to make a new field called status and it's going to be models. charfield max length being like

**8:58:45** · 20 and then null being true and blank being true okay so how do we actually set this well I want some of the default Val vales which of course if you go into the stripe API for the subscription object and look at the status object options we've got them in here and so

**8:59:03** · I'm just going to go ahead and copy and paste something that I did that actually covers this idea so we've got our subscription status here with all of the possible subscription statuses for this particular user so the way I'm going to do that then is of course I'm going to set my choices in here being subscription status. choices and then we

**8:59:24** · might want a default one in here as well so perhaps we want the default one to be active but I actually don't want to set a default I want that to be set based off of API calls so with this in mind we've got our status here now I'm going to go ahead and run our migrations so P python manage.py make migrations and then of course Python manage.py

**8:59:46** · and migrate okay so with this in mind I also want to go back into billing into my G check customer plan here and I should get the status from the plan itself so the status is going to be equal to that sub uh the actual sub r. status and then

**9:00:06** · I go ahead and add this in as well there we go and so what I'm starting to see for this utility is the need to potentially reuse some of this data so we'll go ahead and do that as well so back into our view for that checkout process for the finalized view

**9:00:23** · what I'm Max going to do now is this checkout data I'm actually just going to pop the plan ID and the customer ID so I'll pop those things out of here just like that and then the sub stripe ID might be another one that we need to pop out so let's go ahead and do that as well and then the rest of that data is really just enriching the updated sub options I don't really need it anywhere else so I'm going to go ahead and get rid of this and this checkout data is

**9:00:51** · now going to be in here but I'm actually going to call this my subscription data and that's going to be equal to whatever's left of this by unpacking it like that so that subscription data I'll then go ahead and come in here and unpack that there we go so the updated

**9:01:10** · sub options will come in and have all of the same things that are in there but then in Billing now if I need to add additional Fields I can do that these three will be popped but then everything else after won't be so that also means then I probably want to actually grab that subscription and then serialize it so we'll go ahead and do Define serialize the subscription data which will take in the

**9:01:35** · subscription response and then it will return back the data that we want in other words it's taking in this value and then it's going to return back basically these three values so we'll go ahead and grab this and here we go and and the subscription response now is coming in here and here there we go

**9:01:58** · and then we return back the dictionary that we want for that which of course are these three items and then we can pass in here and we'll go ahead and do that serializing of that data now and we'll go ahead and do the subscription data serializing that response

**9:02:24** · and we will enrich this as well okay so of course one of the things to think about is you know maybe this logic is starting to get a little convoluted and it should just stick into the view itself um but what I really wanted to do was have the ability to serialize this data whenever I need to and so that's really the key here is this git subscription raw being true is nice and all but what I actually want is grab the serialized data as the default response so I'm going to go ahead and pass that in here as well and I'll bring up my

**9:02:57** · serialized subscription data to maybe the top and this might be something that I want to turn into a serializer and use something more like the D Jango rest framework or something a little bit more robust than what I've got here but now I'm at least decoupling the data that I actually want uh and cleaned up for how

**9:03:16** · I'm going to use it okay great so with this in mind let's just go ahead and make sure that I'm not using this G subscription other than the raw data and sure enough I am using that raw data just later in that uh you know that that part okay oh we need to make sure that we close that off great so with this in mind now uh what I want to do is I want to make sure that I have this status data and you might be wondering was like why did I just do this like what was the purpose of that of serializing the data and adding in the status well on one

**9:03:46** · hand of course when they actually do the purchase itself we want the success page to actually have that status data on the other hand I want to be able to go to like membership or something like that or like account and billing and actually have that all refreshed so that's definitely something that I'm going to want to have um so that's another reason to update how we do the serializing of this data

**9:04:14** · because what's going to come back for the period so any given subscription this stuff will change right so every time the period changes we need to know what that start period is every time it ends we need to know when that ends and we also need to know when the status changes as well so that's a key part of

**9:04:34** · this as well so now that we've kind of decoupled these things a little bit let's actually build out the view that will allow us to refresh this data or at least see a refreshed version of this data although in our case it's not going to change a whole lot once we have that view then we're going to do a big sync an actual Jango management command to ensure that we can do the same thing in the management command but for all of the subscript subscriptions for anyone on our

### User Subscription View and Refresh

**9:05:02** · service in the subscription apps under views we're going to define a new page here it's going to be defined as user subscription View and it's going to take in a request and then of course it's going to go ahead and return render and we'll go ahead and do subscriptions sluser detail view.

**9:05:22** · HTML and of course it'll take in the request first and there we go so since this is going to be the user subscription view I also want to make sure that I do from Jango do contrib off. decorators we're going to import the login required decorator and then we'll go ahead and put this on here like that okay so uh to

**9:05:46** · refresh the subscriptions we will go ahead and do if request. method equals to post then we'll do the refresh so we go ahead and print out refresh sub okay so we're not going to do that just yet what we will do first is actually grab the user subscription okay so I'll go ahead and give my user sub object and then created being user subscription. objects. or create user being request. user now the

**9:06:17** · reason I'm okay with creating this has to do with the fact that it does get taken into account when we did the billing process right so when we did the checkout process all of that takes into account if the user already has one if they do it's still going to update everything if it does not have one then it will go ahead and create one so basically if they don't go to this page it's going to create one for them when they go to check out but if they do go to this page then we'll go ahead and say our you know our sub data is equal to an

**9:06:49** · empty dictionary and we'll say that if user sub object . stripe ID then we'll go ahead and take a look at what the current subscription data is going to be so what is that exactly well going back into our billing we already have a few things for this we've got our serialized subscription data of course but we also have the fact that we can come in to get

**9:07:14** · any given subscription with that data specifically which is exactly why I did that right so we'll go ahead and come into our view here and we'll do our import from our helpers so helpers billing and then I'll come back down here and our subd dat is going to be equal to helpers billing. git subscription of the stripe ID and there

**9:07:42** · we go so with this in mind I'll go ahead and grab what our subscription data will be and I'll put that in as context dictionary here and I'll call this my subscription data okay so or rather we could just call it our subscription now that we've got that let's go ahead and create the template for this and we'll go into our templates

**9:08:04** · here create a new template description view I'll go ahead and copy home.html paste it in here and now what I'll do is similar to what we did at home and we'll go ahead and say page title your subscription something like that and then I'll just do the four key value

**9:08:30** · in the subscription itself do items I'll go ahead and loop through and we'll go ahead and say the key and then the value and then N4 okay so in this View I'm going to go ahead and grab this user subscription View and we'll bring it into CF home

**9:08:59** · URLs and then we'll import we already have the subscription views in here so I'm going to go ahead and bring it right above let's say for instance accounts here I'll do accounts billing and this one is going to be subscription views let's grab subscription views and then that's Dot and this is going to be our user subscription View and I'll say uh user

**9:09:31** · subscriptions or user subscription there we go okay um and so with this in mind let's go ahead and take a look at that path and see if we get anything in here sure enough there we go and let's put the trailing slash here and this should be accounts SL billing and there we go

**9:09:49** · we've got no attribute user uh just just a little spelling error there this should be user there we go I'll refresh in here and we've got our building object need two values to unpack so it's looking like maybe the data is not coming back so we'll go ahead and change this to being raw as false maybe that was what the problem was and sure enough it is current Period start current period end and the status

**9:10:19** · great so now we want the ability to refresh whatever that status would end up being of course so the refresh process means that not only are we getting this billing data but then we're also storing that billing data so this right here is actually not correct right so what we really want for this initial sub data is coming directly from the object itself right so we've got the object in here there's our user object and that's actually where some of this data is start and Status right so we can

**9:10:52** · actually do something very similar to that inside of our model but before we do that I want to go ahead and say this refresh status so I'm going to come in here and I will just comment this out for a moment and then or actually we will cut this out for a moment and we'll paste it into our post method here so there's my subd data and then I can go ahead and say for key value in subdata

**9:11:19** · do items I can actually refresh or set everything so set attributes for that subata key value and then after all that's done we'll go ahead and hit save okay so that means then that's going to be our new data that we'll come through with uh which we'll look at in just a moment as well but I'll go ahead and put this up here okay so it is reset in the

**9:11:42** · post method so if I come in here and refresh it's not going to show me anything but if I were to add in a simple form here with a button that is type and uh submit then we can go ahead and say you know something like refresh and we give it an action of uh the current URL which we can just leave it empty for that and then the method being post and of course our csrf token

**9:12:12** · in here and we'll refresh here click that button once it refreshes it shows me what that refresh is which then also means that um that sub data is coming through correctly so what I want then is going back into my model is I want to just create a method in here called serialize that will return back that same data so the data we have which was status the current Period

**9:12:41** · start and then the current period end for now I'm going to leave the serialize as just a simple serialization which means that I'm just grabbing this data so we do self. status and self.

**9:12:56** · current Period start and of course self.

**9:12:59** · current period in so now we've got the serialized method so that also means that the request method itself would be based off of well serialized object. serialize and there is our serialized data I don't have to refresh in here with the post method but I'll go ahead and do the Bly and there's that same data obviously it's in a little bit of a different order which we could modifi and change as we see fit but now it's refreshed so

**9:13:26** · the other part of this is I can actually cancel and delete things which we will have that view in just a little bit um but the idea being that now when I do refresh it it does actually refresh that page one of the things we do want to change though is after the post method happens I actually want to return a redirect and we want to return it to back where this actual URL exists so

**9:13:48** · what I'll do is I'll bring in that redirect I'll also bring in the URL rever here into my subscription which looks like it's already there so the user subscription I want to go ahead and create a URL method on here which I don't have one yet but I'm going to Define it as get absolute URL takes in

**9:14:10** · and it's going to return reverse of the URL name that we just created which was our user subscription and we don't need any arguments or parameters CU it's specific for this user so grab this get absolute URL method back into our view here the redirect is going to be based off of that git absolute URL and so now

**9:14:30** · it's going to redirect it back after we do that post method so then if I refresh it doesn't do confirm form resubmission but rather when we go and do it it will just redirect me back to that page itself after it's all done um assuming that it does finish in due time so let's go ahead and take a look and do

**9:14:50** · account billing it's kind of hard to find or see how fast it goes but in accounts bildings refresh the page should be done if I refresh in here again it is also done so this quite literally worked well one of the things I probably don't need to do is reset the sub data at all uh but this will actually at least update my subscription so naturally what we need to do also is take this and apply it to all potential users and all potential subscriptions as

**9:15:18** · well so that's definitely something we're going to go ahead and take a look at before I go there I want to go into my stripe account into the most recent one which I think is this one right here and then I'm going to go ahead and cancel this subscription immediately and we'll go ahead and now

**9:15:37** · go back into our you know our building page here hit refresh and what it should show us is cancel so that part is working but of course what's not showing up is the actual plan name itself so there's a couple of different ways of how we can think about doing this back into our user subscription we can just add in a property and Define as like plan name and take in self and of course return basically self. subscription.

**9:16:03** · name and then of course we'll return nothing if there is no subscription so we'll say if not subscription return none okay and so then in serialize we can actually do our plan name as self.

**9:16:15** · plan name and then of course if I refresh it here now it's showing that plan name now the serialized data can be really useful for all sorts of things and it could also be useful if you have some sort of API service that's going to want to use this serialized data this can be improved quite a bit but realistically for what we're doing right now it's not something I want to use instead I want to have something inside of here based off of this data so what I'm going to do

**9:16:42** · is just be a little bit more specific about the data that's coming in here so back into my view then I'm going to change my subscription from being serialized to just being the actual subscription object because we don't need a serialize it anymore and then in our detail view here instead of doing subscription. items or in spelled incorrectly subscription. items we're just going to go ahead and iterate through uh basically each one or just display them directly so plan name status and so on so let's go ahead and make sure our view has this saying subscription not subcription and then

**9:17:11** · we'll go ahead and refresh in here and there we go so that's a little bit better as to how we might want to display this and then of course we can also do in our template which is really nice we can do do something like title use that template filter so that it's titled and then at subscription current period and we can also do time until and

**9:17:31** · take a look at that and we see that it has 11 months and 4 weeks and then of course we can put that into parentheses then as the actual date that's going to come through for that value right uh which is kind of nice we can also put like age in here so say for instance we have age and then we can or rather let membership age and then we could grab something like this instead of it being the current we can do the

**9:18:03** · original and then we can do something like time since and we can refresh there and in our case it's not really that old but it now shows us a number of things related to what we might want with our

### User Subscription Cancel View

**9:18:19** · subscription now we're going to do our user subscription cancel view which will take in some of the elements of the original view so user subscription cancel View and instead of of course uh refreshing it we will actually cancel it which will give us some sort of things with refresh I'll leave that in for a second but the thing is with the actual helper function that we want to use so inside of helpers we got billing we have the ability to cancel the subscription

**9:18:49** · but one of the things is do we really want to cancel it right away or at the end of the period so when the user does it we want it to be at period end so let's go ahead and see the documentation for this so in the documentation for the subscription object if you go into cancel you don't see anything related to at period in but of course the response

**9:19:10** · has the ability to cancel at period end so what this means then of course is we have another option for this which is updating a subscription and here this is where we can cancel a period in so that's actually what we want to do and all I'm going to do is pass this in as an argument to cancel subscription and I'll go ahead and put it in as cancel out period end being false so we'll save that for a second and with this canceled. period end the other question

**9:19:39** · is can we still pass in some of those other items like the cancellation details so let's go ahead and do a quick search here and we have cancellation details for the update sure enough it looks like those things are there so perhaps we put in some of these details as options to the view at some point but the idea here is I can actually copy this response here change it a little bit and say uh if it is at period

**9:20:06** · end then we're going to go ahead and do one thing otherwise we'll stick with the default which is something just slightly different now of course we could actually pass in the arguments and do say things a little bit differently for this but I'm going to go ahead and just leave it in as this and then as add in the parameter the default parameter which will be cancel at period end being

**9:20:29** · the True Value so since I now have this in here as an option for my subscription I want to go ahead and make sure that my user subscription has that in there as well so cancel that period in coming through in here and doing models.

**9:20:43** · booleanfield and default being false right so default being false uh is probably the right call here and so I'll go ahead and run python manage.py make migrations and then python manage.py migrate okay there we go so now that

**9:21:03** · I've got this let's go back into our view here instead of get subscription of course it's going to be cancel subscription okay we've got our user object still same thing the reason we're going to give we'll go ahead and give a reason as just some sort of default reason user wanted to end

**9:21:23** · that's it and then uh the feedback will leave in as other but I will pass it in as an argument in here if for whatever reason you end up wanting to change this to something just slightly different so let's go ahead and put enter and separate these things out a little bit so it's easier to read and there we go okay so cancel subscription in here now this of course would probably mean that the subscription has not already been cancelled so and user subscription status well uh maybe is

**9:21:57** · something like is active status something along those lines so with that in mind we'll go back into the model itself and we'll create a property here and Define is active status and then we'll return this as something fairly relevant okay so the first thing is the subscription status so basically self.

**9:22:18** · status in the different status options we want to allow for so the subscription status we'll do subscription status dot or rather um our user actually I'm going to take this subscription status out of here I'm going to copy this cut it out and put it right here so we can import it wherever we need to uh not just from the model itself okay so we got subscription status active and then maybe subscription status uh trialing too so subscription

**9:22:49** · status and trialing okay so we'll just say that these are the active States for it so that we can then say okay cool the status is that and that's what we're going to go on whether or not this is active which might have implications to our post save method as well uh but these are going to be our defaults is active so that we can't really delete something or cancel something if it's no longer active and then once we get that

**9:23:16** · response back the actual data that comes back looks to be the same stuff from our subscription so we should be able to grab whatever this sub data is and see if we set those arguments in here so that means back into our billing here um the response itself should be serialized as well so

**9:23:36** · whatever that serialized is of that response that's going to be the default unless of course we pass raw in so we just want to verify the serialized data that's coming through as well like what actual data we're going to have in here which of course canceled at period in should be one of those things so let's go ahead and grab that cancel that period in into our item here for the

**9:23:59** · serialization and I've can subscription response cancel that period end and there we go now that we've got that let's go ahead and see if we can do this so first off we need to actually activate our new account so inside of pricing we'll go ahead and fill all of this out go ahead and subscribe again this hopefully will work in terms of refreshing our subscription giving us an active one so then when we go into the billing or rather accounts SL billing we

**9:24:32** · can see that it is active now great so this actual view then or this template rather we're going to go ahead and come in here and change a couple of templates for this view so the cancellation view this should be user uh cancel view we should go ahead and copy that right here so inside of our templates let's go ahead and create this one I'm going to copy the detail view and say something like are you sure you want to

**9:25:04** · cancel something like that and cancel maybe the plan name and we'll get rid of this okay and realistically in here we'll have to go ahead and say uh whether or not this is an active account let's go ahead and keep the name in there and so we'll go ahead and say if subscription do uh is active what do we

**9:25:31** · call it active status let's just verify is active status otherwise we can put in you do not have an active membership or something like

**9:25:50** · that your membership is no longer active great with this in mind let's go back into our detail view here and next to our refresh button I'll go ahead and put a another button which is going to go into our delete View and so I'll go ahead and say um you know end me or

**9:26:13** · cancel membership okay and so I need the URL for that so back into our models I'm going to go ahead and copy this absolute URL and we will paste in here and we'll go ahead and call this get cancel URL user subscription cancel and so back into our site URLs we'll go ahead and

**9:26:37** · wrap that in I'll copy this billing and then just call it cancel and then our user subscription cancel view user subscription cancel great great and then back into our detail view here I'll go ahead and grab subscription get cancel URL let's see if

**9:26:59** · all that works let's refresh here cancel membership brings us over are you sure you want to cancel the basic plan should probably not say refresh it should probably say yes cancel or we could do ahref um you know go back basically so that's going to be subscription. getet absolute URL and say no go back save that and we'll

**9:27:27** · refresh in here no go back should take us back here cancel membership yes cancel and there we go it says your membership now canell and of course the problem here might be that it actually redirected us into that page great um so it did cancel

**9:27:48** · we also want to bring one more thing in here and that's from Jango contrib we're going to go ahead and import messages and with this being cancelled in the cancel view we'll go ahead and say messages. success and it's going to take in the request your plan has been

**9:28:12** · cancelled okay so now let's go ahead and try that out again once again I can't actually re I can't actually cancel this membership because it's no longer active so I want to go in and redo this part I did the subscription it's going to load one of the things about the success call here is I probably want to change this as well instead of success wel welcome and having this checkout view I probably want to actually send them to accounts

**9:28:39** · billing after that's all said and done but there we go it's now active once again I can go to cancel the membership and do we want to cancel we can say yes cancel and now I get this success message in here as well so pretty great pretty straightforward not really that much of a difference as to what is happening in terms of what we did before with the automated version but now if I refresh in this user's account I can now see that they're

**9:29:07** · active and they cancel at some point right so that's actually really nice versus what we did before where it immediately canceled them now these pending ones we still need to cancel of course but I wanted to make sure that the user could do it before we did all of the automation for everything else this this me message success we also probably want to put in other places and say your uh plan details have been

**9:29:30** · refreshed right and then also when we actually do our checkout process let's bring that in as well for our checkout finalize view assuming that all things go well we'd come in here and say this and then we would want to return redirect to the user sub object which again is is

**9:29:52** · going to be that same thing and this is going to be user sub object. getet absolute URL so it goes to that building page and then inside of messages we'll go ahead and bring that one in as well so from D Jango contrib.com

**9:30:22** · there we go save that and obviously you go through this process all over again the only thing I'm going to check here is going back in here and just hitting refresh and boom plant have been

### Cancel Dangling User Subscriptions

**9:30:38** · refreshed now we want to build a custom D Jango management command that will clear out our old active subscriptions the ones that are kind of dangling that shouldn't be there before we do that I need a slight housekeeping thing and that's with this cancel subscription I actually didn't Implement one of the portions of it which was the cancel a

**9:30:57** · period end we actually will bring that in to being canceled at period in being true for a reason as we'll see in just a moment so now that we've got that we're going to go ahead and update some of our management commands this sync Subs is actually more like syncing permissions so I'm going to go ahead and call this sync permissions instead and so that way

**9:31:18** · we are syncing our subscription permissions from that subscription model model I'm also going to go ahead and copy this and we'll go ahead and do our sync user Subs so just a way to kind of change it from before but slightly the same okay so the idea here is we want to go through our different user subscriptions and we want to see which ones are still active so there's a couple ways on how we can think about this first off what we could do is we could grab all of these ones that are in

**9:31:46** · here literally all of them and then find the user's customer ID here but actually what I want to do is I want to grab all of my customers so for from customers.

**9:31:56** · Models we're going to go ahead and import our customer object here and I'll go ahead and use that as my query set and so that I I'll come in here and say for customer obj in Qs we'll go ahead and grab our user from that for a reason that we'll see in a moment and then we'll also grab our stripe ID or rather our customer stripe ID and then of course that's our customer object.

**9:32:20** · stripe ID now as soon as I see this that I actually need the stripe ID I think okay maybe I should filter this out to where it says is null being false that way I'm grabbing all of these customers and so what I want to do here is I'm just going to go and print out and we'll go ahead and sync the user subs and remove old

**9:32:41** · ones or something along those lines and then I'm going to go ahead and do print um the customer stripe ID or we can also grab that as well and so I'll go ahead and do something like this great okay uh

**9:32:57** · so with this in mind let's go ahead and just run python manage.py hit enter and we've got our sync user Subs in here and if I hit run through that I see that it says the incorrect value because I did not do the string substitution so let's go ahead and do that again there we go okay so I want to sync through each one of these customers basically and so that means I want to actually list out all of their various subscriptions so if you go

**9:33:21** · into the AP gu you can see that we've got this ability to list subscriptions but the main thing here is not listing any subscription but rather just listing the active subscriptions so before I actually go through the active ones I want to go back into my user my hungry pie user and cancel out one of the resent memberships I just want to verify that it's going to do cancel at period in and of course this did not that raised an error so it shouldn't be cancel but rather update let's just

**9:33:49** · verify that it's update by going into to the actual update a subscription it's not update it's modify let's go ahead and call it modify now I'll go ahead and try and run this again let's make sure it's running great and we go back into our user count I'll resubmit it and hopefully what we'll see then is the plan was canceled and it will end at the period end which we could also verify inside of stripe that it should probably be listed in here as one of those values

**9:34:17** · and there it is canel okay great so now what I want to do is go back into build and we want to grab our general listing out or getting out the different subscriptions so we'll go ahead and search for git subscription there it is right there I'm going to go ahead and copy this and paste right below as in we're going to call this now our git

**9:34:38** · customer active subscriptions so this is going to be our customer stripe ID we probably don't need raw cuz I'm going to have everything coming back so I'm going to go ahead and leave it as that and then we're going to return this uh response itself okay because we don't need to serialize it we really just need the response because we will iterate through it in just a moment so this of course is now going to be list which is very apparent by looking in the API itself we've got list here we got the

**9:35:06** · parameter of customer which we can put the ID in so that means I can pass in customer and the customer stripe ID easy enough next what we want is just the active subscriptions literally anything that says active on here we want it to come through so that I'll change to being status being active just like that now of course you want to make sure that you're getting the right actual value here so if you need to just refresh as to what these statuses can be in the um

**9:35:34** · subscription object itself so if we scroll down here there's all of the different statuses so maybe you do trial in as well but for us we're just doing active so I'm only going to be deleting the current active ones if they aren't somewhere and then also the other thing is there's a limit as to how many will come back so that maximum limit is 100

**9:35:55** · we're doing it per customer there should be no way that all any customer has over a 100 active subscriptions without something major going on in your system which might mean that you just go and stripe and delete them manually in this case we just want to just check that the dangling subscriptions if we accidentally have any or for some reason in your checkout view if you were to go into your checkout View and you accidentally commented this out that

**9:36:23** · means it's just not going to cancel your old one automatically instead it's just going to stay there but it will still update all the other values in there as well so that's the part that we want to sort of account for now inside of our user subscriptions here now I'll go ahead and import so import helpers billing and then we want to grab what those subscriptions are so I'll go ahead and say Subs equals to helpers building. getet

**9:36:51** · customer active subscriptions going to break down the Explorer here we're going to go ahead and put in that customer stripe ID there and then I'll go ahead and do print or rather we'll do for Sub in Subs I want to just print sub. ID and

**9:37:07** · that's it okay so now that we've got this let's go ahead and run that management command again just going to clear everything out let's run it and there we go so we've got a bunch of different Subs that are coming through here and of course it's printing out the sub ID as well as a subscription so let's go back into our get subscription list here we actually don't need a lot of the print statements that are inside a billing okay so we'll get rid of that response and then I'll go ahead and run this again and so now we've got our

**9:37:35** · hungry piie user and then all of this great so the next part of this would be to come back into our Sync here we want to check our user subscriptions basically I want to do quer set equals to user. objects or rather user subscription doobs and I'll go ahead and say existing user Subs qs. objects. filter

**9:37:58** · stripe ID I'll do I exact equals to the string of this sub and then we'll go ahead and strip this thing out if need be probably don't need to do that but we will do it and it should be sub. ID and then I'll go ahead and just see if it exists in the database so we'll goe and run this again and so I think one of these should say that it does and sure enough one does say that it does so

**9:38:24** · basically we want to avoid that one we don't want to actually cancel that one because it is still active so we'll go ahead and say if not that exists then I'll or rather I'll say if it exists we'll go ahead and continue it otherwise we'll see all the other ones which should all say false right great so

**9:38:42** · there we go that allows me to now then cancel out those other subscriptions the ones that are active but dangling that should be cancel so what I'm going to do then is I will cancel them but I'll cancel them at period end so if there's some issue with it then we will see that as in it's not going to rebu it it'll just be cancelling soon and then eventually it'll be cleared out that's kind of the point so let's see what that looks like first so inside of here we'll go ahead and do helpers and billing cancel subscription

**9:39:16** · the stripe ID of course is going to be related to sub. ID and then we're going to go ahead and give a reason and I'll call this a dangling subscription dangling active subscription and then we'll go ahead and say cancel at period end be true great so now I should be able to

**9:39:39** · see that my Subs I will have no subs left after I do it one time so I'll go ahead and run this again and so it's going to go ahead and remove all the old ones it just did and then I'll go ahead and run this again and now I should have no old ones really active anymore now those are technically still active so that's going to continue to do that until I completely remove them and I'll look at that in just a second but if I refresh in my hungry pie user now I should see that these all

**9:40:09** · cancel out at the end right so they're all now canceled out at the end which is nice but I can go one step further and say instead of cancel that period end I'll just go ahead and say false and just quite literally remove all of them so that they're completely cancelled and they're completely gone from that future lookup so it's going to be up to you on how you want to approach that do keep in mind that if you do cancel something that doesn't need to be canceled on accident it can be a big problem but

**9:40:35** · this is the basic plan that we have for our user this should be the exact same one that's in our database so let's go ahead and copy that ID go into that uh that actual user subscription and then just verify sure enough when I do a quick search there it is it's literally the same one so this process is nice for

**9:40:53** · getting rid of those dangling ones and maybe you run this like once a month because you're doing monthly or annual subscriptions if you run it once a month you should probably be in good shape as far as getting rid of those inactive subscriptions or you just run it on a one-off basis and you just make sure that you're just checking that all of that in there now this also assumes that your user subscription model is being updated correctly because you probably don't want to cancel subscriptions that shouldn't be canceled

### Custom Django Management Command with Arguments

**9:41:25** · now the reason I actually called our management command sync user Subs is because I want it to be multifunctional I don't want it to just do the dangling Subs so what I want to do right now is refactor it a little bit so that it does do the dangling subs and any other ones that I want to do inside of this command so I'm going to go ahead and copy everything here go into our subscriptions and we're going to create utils.py paste this in the reason for

**9:41:49** · this is this handle function is going to be a standalone function that we will call whenever we want to and of course it's not going to be handled anymore and it's not going to take any of these arguments instead this is going to be something like clear dangling Subs right so that's the util function that we will have for our subscriptions and it'll just run through all of that same stuff that we just did but now I don't need these Imports here and so once I've got this I'll go back into my sync user Subs

**9:42:17** · here I'll get rid of some of these Imports and I'll just import utils from the subscriptions uh app as subs utils and then now down in handle I'll get rid of all these and just do Subs utils do

**9:42:33** · clear dangling Subs so we're right back to where we started except it's a little bit cleaner for the management command now typically speaking this is what I'll do when it comes to commands that start to get a lot more complex so in the case of sync permissions this one's still not very complex although this could be grounds for being a utility function as well because we really don't want to repeat oursel anywhere so I'll do exactly that and I'll just copy this go into my utils here right under here we'll go ahead and do sync Subs

**9:43:06** · permissions or rather syn sub groups permissions or something like that and then in here there we go we've got that same call subscription model we need to import so let's go ahead and import it there we go so back into our sync permissions we'll go ahead and do the same import as we did here so we'll go ahead and do this and get rid of all of these things in here and just sub utils do sync Subs groups permissions

**9:43:35** · great so one of the things that's important to note though these functions should not be imported to these models the actual model libraries themselves otherwise you'll get a circular import that's an important piece of that if you were thinking about it of putting like in post save calling this stuff right here okay so now that we've got this

**9:43:55** · let's go ahead and talk about why I did this because we want it to be a little bit more complex than this current command this could be true for the permissions as well but we're really going to focus in on the user Subs because that's the major part that we still need to fix or finish within our stripe integration portion so the command itself we can actually bring in new arguments here so we can do something called add arguments and this takes in self and a parser of some kind

**9:44:21** · and I can just do parser do add argument and I can do something like clear D dangling and then I can set this as an action of being the store True Value and then the default

**9:44:38** · being false so basically in other words when I run Python manage.py and then the name of the module so of course we'll just grab the module name and then this actual item here it will set this value to being true and this value is inside of options so let's actually just print out options first we will go ahead and run that management command just like this and so we can see that I've got an unexpected value of active this should not be active but rather action let's

**9:45:11** · try that again and there we go and so we see here's the options right here and notice at the very end we've got this clear dangling option we also have other options in here related to defaults for the base management command settings you could change the J settings module there's a bunch of things in here that's kind of cool but in our case we just want clear dangling which of course is this exact argument but it's with the

**9:45:36** · first dashes being removed and then this Dash being a underscore so basically we just come in here grab that and do options.

**9:45:45** · get essentially the same thing but once again it has to be an underscore so it is pythonic there we go so now all I want to say is if clear dangling then I'll go ahead and run that otherwise we'll go ahead and sync active Subs this is going to be more like syn or clearing dangling active subs or

**9:46:17** · not in use active Subs in stripe something like that right okay cool so now that we've got that if I do sync user Subs um I get the options still printing which we don't need anymore but if I run this I can see it's

**9:46:33** · just trying to sync active subs and then of course we can go ahead and say something like done so there will be a process in the middle of those two things but the idea being that our management command is a lot more refined and allowing me to have

**9:46:49** · different arguments in here while also giving me a new utility function that I can use in other places which is pretty nice I don't know if I will ever need to use it in anywhere other than what we've got that's certainly not how I'm designing it but this idea of clearing these dangling Subs this is something that I might want to be able to use anywhere at any time

**9:47:11** · and instead of just having it stuck inside of the management command great so it sered two functions which was this add argument now of course we're going to add to this so we can actually sync these active Subs let's go a and take a look at how to do that right now now we're going to go ahead and create a subscription utility function so that we can refresh any given user

### Subscription Refresh Utility Function

**9:47:33** · subscription now we already have this process in our user subscription view where we did it on this post method here so really it's actually this block right here for the refresh not so much this one um so what we're going to do is we're going to change this block to being inside of a utility function I'm going to go ahead and copy it and then in our utils here we're going to Define refresh user

**9:47:57** · subscription and then we'll go ahead and do this part right here okay so how is this going to work exactly well the Baseline of it all would be to grab our user ID whatever that is and then we can go ahead and grab our user subscription object here now so we can do obj equals to user subscription. objects. git user

**9:48:20** · ID is equal to user ID remember with a forign key here if the user model is in there so users. model forign key you can just use the ID in there as well just putting that underscore that is a field that comes by default okay so now that we've got that this is our user subscription object now and we come in here and we can just kind of replace everything and that looks generally okay but the thing is I want more than one single user so the way I'm going to do this is now going to be refresh us users

**9:48:51** · subscriptions and this right here I'll set as equal to none so the way I'm going to think about this now is rather being a filter and this being a query set so then I go through each object in that query set and then save it accordingly now the reason I want to trigger that save has to do with any other post save signals I might want for

**9:49:13** · that user subscription which of course we do have some but I definitely want to trigger that save if things change there are other ways to do this this is just one of the ways that I think is effective okay so now we're going to filter Down based off of that user ID but before I actually get into that user ID let's talk about another filter that I think is a little bit more important right now so start out with is just the base query set this is all user subscriptions which is actually not what we want we don't want to get all user subscriptions we really want to refresh active user subscriptions right and so

**9:49:45** · in my case I'm going to say active is two different kinds of subscription statuses which is active and triing so those two things right there are the ones that I want to use which actually presents a little bit of an issue as far as how do I actually do a filter for both of these things now there's a couple of ways how we can do it so let's go back into our utilities here and I'm going to go ahead and import the subscription status one of the ways we can do it is say we can say active Qs is

**9:50:14** · equal to qs. filter status equals to the subscription stat that is. active and then we can also say the triing Qs equals to basically the same thing but then trialing right and then we can actually give our final Qs we can actually map these together with a pipe just like

**9:50:38** · that so that brings out a final query set that actually combines these two now there's actually a better way to do this with a different kind of lookup for our Jango query set and the way we do that is from Jango db. models we import a q lookup what a q lookup allows us to do is to chain things together so I'll go ahead and say my active Qs lookup and

**9:51:03** · I'm going to set this equal to just a twole for right now and this twole is going to be a q lookup which is this lookup right here that's how you use q and then you can use a pipe to do another one and so very similar but this is now the filter that we're going to end up using so instead of having all three of these we can just do the Qs being qs. filter of that lookup okay so

**9:51:32** · naturally I could also make some custom Jingo management commands that I can say something like active accounts or something like that that is doing a custom model manager as well as a custom query set which is not something I'm going to cover right now but the idea here is we can now filter these things down based off of those actual status items which of course is what I want but

**9:51:54** · going back to this user ID thing here how do we actually approach this well there's three options I would say that are available for this user ID I could actually think of it as user IDs instead of user ID so this means that I could think of it more as just an empty list here and so if it were an empty list I would then change my filter down a little bit more uh to being the user IDs in there so something like this where it's us \_ ID is in that list right so

**9:52:25** · doing that would actually filter this down even further so you may or may not want to have the user IDs in here in other words you might want to have this as your default query set always and then if you pass in the argument of user IDs then it will adjust so that's why I'm going to keep it in as a default so I'm actually going to rearrange these things a little bit and actually bring in the active Qs first as the initial

**9:52:49** · filter that we want to use then I'll go ahead and say if the user IDs is an instance of a list then I'll go ahead and use that as my next filter so Qs equal to qs. filter this item right here okay then of course if it's a integer we can do L if in is instance

**9:53:12** · user IDs of an integer then we can filter down again in a very similar way but this time we just put it into a list and we can actually do this with a string as well which may or may not be something you want to support but basically if it is a string then we can come in and do that same thing again I don't know if I would want to support that necessarily but then everything else is just going to be ignored right

**9:53:38** · so any other kind of data type for user IDs is just ignored and now we can filter this down even more so let's go ahead and verify this and what I want to say is the actual count finished so I'll go ahead and say complete and this is going to be equal to complete count being zero and then the um amount or actually the Qs count being qs. count so

**9:54:04** · complete count would go up every time it's completed so complete count plus equals to 1 and then basically I want to return back the complete count and then the query set count okay so basically did a complete all of the ones that are equal in words let's go ahead and just say that it's equal so the query set is updating all of those and it's really just checking based off of the stripe ID so with this in mind now going back into our view we can actually update this so

**9:54:34** · let's go ahead and do this with our from subscriptions we're going to import utils as subs utils and then in this post method here now instead of this kind of refresh we're going to go ahead and do sub utils dot this is refresh active users subscriptions and of course our user ID equals to request.

**9:55:00** · user. okay so then I can go ahead and get rid of this and then I can go ahead and say um finished and then if finished your plan details have been successful uh otherwise something something failed and this is going to be messages. error your plan details have not been

**9:55:29** · refreshed please try again okay there we go and so now we've got a reusable function that we can use anywhere we need let's go ahead and just verify that this works inside of our actual user so going back into my hungry

**9:55:46** · pie user here I'm going to go ahead and hit refresh in here and they have not been refreshed okay so naturally we have some sort of issue in here and we've got our complete count coming through so maybe the query set is bigger than this so let's go ahead and just do a print statement on that query set count and I'll refresh in here oops not cancel membership so no one go back refresh the membership and once again hasn't been refresh Subs was one complete count

**9:56:17** · let's see what that is which is interesting oh there's a problem this should be plus equals to one so adding one there and let's refresh again and what do you know your details have been refreshed good so that showed us that that condition statement did work and now it's actually going through and verifying that all of those were refreshed and now we're in a really good spot

### Custom Django Model QuerySets and Model Managers

**9:56:43** · to now as soon as you start seeing a bunch of different kinds of filters in your query set it's actually a really good grounds to start using something different something better the way we're going to do this is by using a custom model manager and a custom query set so we're going to start off with the custom model manager and that's going to be our user subscription manager and this is

**9:57:06** · going to be models. manager and then we're just going to go ahead and say pass to start out as soon as we Define that we go into our model that we want to customize and this is going to be the user subscription manager now the reason for this has to do with our utility function we actually filtered things down based off of our user so if I were to grab this user stuff let me just grab this is instance part into my model manager I can define something like bu user IDs and I can say self and user IDs

**9:57:39** · is none and then I can refresh this into something along these lines right so I've got user IDs coming through in here and I can actually do the query set being something like self dog query set like that and then we can actually return back that query set and so now I've got this model manager here that in my utility function instead of doing something like this I can do the objects

**9:58:08** · so something a little bit more like user. objects and then bu the user IDs model manager and then pass in the user IDs and user IDs right so this is nice and all but

**9:58:24** · the problem of course is the fact that it's actually ignoring a whole other query set that we have in here so we want to actually adjust that so that it is working correctly in terms of the actual query sets themselves so to do that we actually create a custom query set and then the way we do this is saying user subscription query set and this is models. query set just like that

**9:58:47** · notice the capital q and s we're going to go ahead and Define this buy users IDs here so I'll go ahead and cut this out paste it up here we no longer need to get the query set but rather we can go ahead and say if the instance is a list we'll then just return self. filter that query set if it's not if it's an integer we'll return self. filter that query set otherwise we'll return self.

**9:59:13** · filter that query set and then we can go ahead and return self so that's another way on how we you go about doing it now you might not want this return statement necessarily so if you don't want that return statement like that you can keep it in as the Qs like this and just say Qs equals to self

**9:59:32** · and then returning Qs and that probably will work just fine as well so this query set this is allowing us to do something a little bit more robust but first we have to define the git query set method here which is going to be something similar to what that autoc completion did but instead it's is going to be returning an instance of this class with self. model and using self.

**9:59:58** · DB so it's using the default database on this model and now what I can do is in this bu user IDs instead of having the actual you know arguments in there again I can just return self. gate query set.

**10:00:14** · by user IDs and then pass in the user IDs equal to the user IDs now I actually probably won't ever use this I probably won't ever use it as the model manager itself um you might but also you might not in my case I want to go ahead and ignore it mostly so we don't get it confused with this query set here so then back into my view what I would end up or rather the utility function what I can end up doing then is cut this out and paste it in like that that's it so which actually means that

**10:00:45** · essentially I would then say if user IDs is not none then we'll go ahead and do query set equals to query set by user IDs so I now have this new function on any given query set which of course I could do with this active query set lookup as well so the way I'm going to do that is bring the d jeno q function look up inside of my Jango models here

**10:01:09** · and we'll paste it right there and then we'll go ahead and come back down to our new query set manager or the query set object itself and then I'll go ahead and grab the active Qs and then we'll go ahead and say by active trialing something like that and

**10:01:29** · then I'll return back what it will be which of course is that same lookup itself and then self. filter of that same lookup okay so now I don't actually have to do anything with this if I don't want to but back into my utilities here let's go ahead and change this to just simply all do by active triing great so refresh

**10:01:53** · that and there we go so now it's actually a little bit closer to what I want and the reason for this is say active only being true or false and so active only would then mean that basically I come back in here and say if active only Qs equals to qs.

**10:02:13** · by active triing great so now that we've got this I can go go back into this view here and come in and say active only being false cuz whatever the subscription is whatever this users current subscription is we want them to be able to refresh it because well they couldn't before so if I come back in here let's go back into our users app here I'm going to go ahead

**10:02:40** · and hit refresh and your plan details have been refreshed in this case it was active but if it was not active of course we still want that to be refreshed which is the main part of what we're doing here and so now that we've got this concept in mind we need to actually start adopting the next part of this which is going to be straightforward as well now the straightforwardness of it will be based off of those dates which we'll come back to but for now I want to go back into the sync user um Subs here now because I

**10:03:10** · can actually start using that utility function so the user IDs if we don't pass any the default is going to be this subscription if we use only active going to use that only active and it's going to go through all of the other ones so let's go back into here and now I can do SUB utils do refresh users active only

**10:03:31** · being true what do you know this could also be an argument if we wanted to change that so now we have the ability to say false if we wanted to and then of course we could also pass in our various user IDs but the problem with this current lookup is it's going to look for everything so we definitely still need to limmit that down down and basically what I want to do is we'll go ahead and say done and then we'll go ahead and say print if done we'll print out that done

**10:04:00** · so let's go ahead and run it now with our Python manop py and then grabbing that sync user Subs hit enter and sync active Subs done great so um of course we could print out everybody so if we wanted to do uh verbose being true I'll

**10:04:19** · just go ahead and come back into the utility function itself pass in verbose being false and then I'll just do a print statement now but basically if verbos we'll go ahead and print out um you know updating user and then this is going to be object. user and then maybe object.

**10:04:42** · subscription and then maybe object do you know cancel date or something like that cancel period end or the actual date let's go ahead and grab the actual date with the current period end and back into here we'll print that out okay so now let's go ahead and do that sync these users and it's going to go ahead and updating user basic plan

### Filtering Django Models with Datetime Objects

**10:05:06** · boom now we're going to take a look at how to do some timing inside of python so that we can do our own custom query set based off of that timing we'll explain that in just a second but the idea here is inside of python doesn't have to be to be the Jingo manage shell you can grab what now is in my case this

**10:05:23** · is now this is definitely the past for you cuz it's the past for me now but the idea being we can actually use that now and then get what next week is going to be by using the time Delta here and we can see this is next week now we can actually check is now less than next

**10:05:39** · week of course true is true right that's an easy thing to find it's also easy to glance but what we've got here is a condition that I can use proba programmatically now and of course we can also check in 6 days now is of course less than 6 days as well no big

**10:05:57** · surprise here now of course if we wanted to do our subscription let's say for instance our subscription ends in 6 days and 20 hours now what we're going to see is something a little bit different so is the subscription in greater than in 6 days well of course the answer is yes is it less than the next week so sub ends is it less than next week well yes is it greater than next week is it after next week well no great so this alone should

**10:06:25** · allow us to filter things down quite a bit and so what we see is a couple examples there in that and what we can also guess is it does it end in about 7 days and of course if we use these two conditions in 6 days and then less than 7 days we can see that it ends in about 7 days but this is not perfectly accurate it doesn't end on the seventh day so what we can do there is we could take this a little bit further and say we'll do our sub two ends in 7 days and

**10:06:54** · 2 hours so technically speaking it's ends on the seventh day so what we need to do is we need to check inside of there so we still have our next week here so our next week men this is midnight of next week 7 days from now and then this is going to be almost midnight 7 days from now and we can come

**10:07:13** · in here and take a look at that and of course if we add in the micro second here it's even better and this should be 59 as well so even closer to what the max would end up being and so then we could obviously test if it's in between those two days so if we put it into here and do something like this we can see whether or not that is a true value so basically we want to be able to query our subscriptions if it ends in that

**10:07:42** · time frame so that's how we're going to do it we're going to start off fairly basic and then we'll go ahead and make it more and more robust so inside of our user subscription here we're going to go into our user subscription query set and I want to Define and say buy next week

**10:07:58** · so basically we want to say actually we'll go ahead and do buy days left so we'll go ahead and say days left equals to 7 so the way we do this is we're going to grab now now of course is going to be from D Jango do utils

**10:08:17** · import time zone this will take into account the time zone that's been stored on our database so that we just have it and then we'll come back down here now is time zone done now and then we want to go ahead and say next week or rather uh you know in in days that's going to be uh something from date time so we'll go ahead and import that One Import the date time object here or the datetime module so then we can actually create a datetime object here so datetime and the daytime.

**10:08:52** · time Delta or rather daytime do dat time Delta like that and then we'll go ahead and add in days equaling to days left okay so what that means then is actually we're going to do now plus that time then I want to actually use that same thing and we want to do Min and Max so

**10:09:16** · in in days Min and that's going to be in in and replace and this is going to be hour being zero minute being zero seconds being zero and microc being zero okay so

**10:09:31** · I'll do that same thing again and do Max and this of course will be 23 and then 59 59 all the way all right and there we go so that's the Min and Max so this is then going to be a filter based off that so we'll return sell self. filter and we're going to go ahead and grab the field which of course is current period end so that field is

**10:09:55** · what we're going to filter down here and what we want to filter of course is based off of these dates so if this makes it a little bit easier we can say in end days men or rather days or day start and then maybe this being Day end just so you can see that it is going to go based off of the start of the day and the end of the day so that means means that does our period fit in that time frame the way we do that is by saying that it is greater than or equal to so GTE would be greater

**10:10:29** · than or equal to we can pass in the start so it's after the start of the day but then we're going to do that same idea here to being before the end of the day so less than or equal to before the end of the day and so now that will filter based off of how many days are left in the future now if we want to do the same idea with days ago it's actually really simple we can just say by days ago and instead of it being days

**10:10:54** · left we would do days ago and this would be however many days we want in here and then we put in days ago and then we just change this to Simply a minus the period filter is still the same so this is looking for how many days in the past it's looking for but we still want the same start of the day and the same end of the day so the actual filter is going to fall under that same realm and so we could actually combine these two if we wanted to I'm going to keep them separate for now uh because realistically if it ended 3 days ago or

**10:11:26** · if it ended recently perhaps we don't want to have the start or the actual end filter maybe we just want the start filter so everything that's ended within the last 3 days maybe you want to do that with days ago so that every day you can kind of check what's happening in the last three days but I'm going to go ahead and do it for literally 3 days ago if it ended and then that would be the last sort of sync that I might end up doing but the day left is one of them that I also want so let's go ahead and

**10:11:52** · now use these two filters the way we're going to use them is inside of the utilities function here refresh active users so we'll go ahead and say days ago equaling to negative or let's say zero to start out so days ago being zero so basically if zero is the days ago then

**10:12:13** · we probably won't actually end up using it right and so what I want to do then is in my filter which is going to happen after this we'll go ahead and say if days ago is greater than zero then Qs equals to qs. filter or rather by days ago we can then pass in days ago here as

**10:12:35** · exactly that okay and then again we can then add in do uh days left there we go so days left and then by days left and we pass that in as well so

**10:12:53** · days left will be another one that we put in here great so with this in mind I'm going to go back into my sync user subs and I'm going to add another argument or two arguments rather so we'll go ahead and do days left this is now going to be a

**10:13:12** · default of zero and then we'll go ahead and grab in the type being a integer and then I'll go ahead and grab this as well as days ago once again default being zero we might even put it at negative one or something like that but I'll leave it as is and we'll go ahead and do days left equals to that

**10:13:35** · option and then days ago paste that as well and days ago and then add these in as arguments to our subscriptions and one of the things you might want to do then is active only maybe change that to be an argument as well uh that's not something we're going to do at this time but it's up to you okay so with this in mind we've got our veros being true so days left being a

**10:14:02** · default of zero so now let's go ahead and exit out of here and take a look at what's going to happen with python manage.py and grabbing our user Subs sync user Subs it's got my hungry plan so it's doing everybody and then if I did days uh left to one we can see there's none if I did 20 there's going to be none if I did 200 there's still none let's do 400 now I should have the actual 400 um

**10:14:36** · but that's not accurate that's not how many days are actually left so what I want to do is maybe allow it for um I'm just going to remove something real quick on my filter and that is I'm going to go ahead and say less than or equal to that day so I'm going to go ahead and get rid of this for just a second so I can actually see something coming through hit enter days left at 400 that's working if I change days left to 200 it's no longer

**10:15:05** · uh or at some point it's probably going to say that it's not working anymore let's put it to 10 it might be a monthly plan and sure enough it's it's a monthly plan so 30 days they're showing let's put it down to 20 days it's no longer showing and so the only reason for that is because of iterating through every possible day that that it might fall into is just not something I want to show right now but that actually gives us a really nice thing with this so

**10:15:31** · perhaps we also put in a Range here so let's say for instance we just want to say days until or within this range that is something else you can think about doing like basically taking this and putting it as a range so let's say by range and um you know days start being seven and then Days End being 120 something like that

**10:15:59** · so then an end days would be day start so this would be the days start from now and then the Days end and then Days End from now and we bring this Days end in here just like that okay great so now the start one day

**10:16:18** · start is going to be that one and then the days from now is going to be the day end so basically it's at the beginning of that range and at the end of the range but I want to change it from day to range start and then range end right and so hopefully that makes a lot of sense here and so now we can just use that same sort of idea with the range so let's go ahead and grab that and do parser and we'll go ahead and say start or let's go ahead and say days

**10:16:49** · start and Days End okay and so back into our utility function here we'll go ahead and do that again and we'll do day start and Day

**10:17:05** · end let's just make sure that we did day start and Day end here as well okay so now we've got that and so we'll go ahead and then say if day start is greater than zero and day a end is greater than zero then Qs by equals Qs by

**10:17:25** · range and then passing in the arguments for that range which are these two so let's go ahead and come in here day start and Day end great so naturally we would probably want to improve these conditions more so like if days ago is there then the other ones don't work or whatever um but for now I'm just going to leave it as is and then we'll go ahead and grab this again and day start and then Day

**10:18:01** · end okay and now passing those in day in day in and day start great let's try again so day start 20 days Day end 30 days run that one and

**10:18:21** · there's our range now so it's actually going to be that simple in terms of how we can narrow these things down or what we can end up doing naturally we can change everything to just run through this range here because we could probably put a negative in here as well um and then just change how the datetime objects end up working but overall we've got a really robust way to find out our various user subscriptions uh which is actually actually really nice so days left being let's say 2 300 there's

**10:18:53** · nothing right so that is I think pretty pretty cool now how do we run a Jango command on a schedule that we decide now of course this is the command right here and if you went through that last section you have an idea as to why we need to run this but that's not really the point the point is how could we run it how can we schedule this to be ran every single day now of course there's the manual option where just log in and

### Hello World from GitHub Actions

**10:19:19** · do it every day at a certain time that of course is not something I recommend the other option would be to use something like python accelery which is actually really great but this requires us to have a whole another server running all of the time with a message broker as well something like redis which I think is actually really great it's a really easy process to do and can

**10:19:39** · be very powerful for scheduling all sorts of things out which is why I cover it a lot on my website but the thing here is we are just looking at scheduling I'm not trying to delay other kinds of tasks in my jle project yet I'm literally trying to run this command on a regular basis so I want it to run every day every week or whatever I decide that's not really the point the actual command itself isn't even really the point the ability to run it on a schedule is and so the way we're going to do this is by using GitHub actions as you might already be aware GitHub actions itself is often used for

**10:20:12** · actually cicd continuous integration and continuous delivery or deployment but the idea here is is we can use GitHub actions as a servoless scheduling process thanks to what neon also brings and the fact that we can Branch our database at any time use that branched version to do all sorts of stuff or even use the production version to do things like syncing user subscriptions and so

**10:20:37** · that's actually what we want to work on in this section so what we're going to do now is we're going to get started with our very first workflow just so we can get our feet wet as to how it's going to work and how we might end up using it in the long run all right so navigate into our GitHub repo we're going to jump into the actions tab here and this is what we're going to be doing in this section we're going to be building out a bunch of different GitHub actions to make all of these features work well in production and on GitHub so

**10:21:03** · the idea here of course is you could always do these suggestions that are in here there's a lot of good suggestions to make these things happen but I want to actually build one myself so we're going to go and click on set up a workflow yourself and it gives you just an empty document but the main thing here is we see there's a path to make this workflow happen which is GitHub

**10:21:22** · workflows and then the workflow name so that's what we want to do let's jump back into our local code and this is where I'm going to go ahead and start working make sure that you're working on your main branch whatever your primary branch is for the repo which is in our case main but assuming that you have your branch and all your GitHub stuff set up this will work just fine so I'm going to go ahead and do.

**10:21:41** · GitHub slw workflows and then I'm going to go ahead and name my workflow my very first one we'll just call it hello world yl just so we can see the basics of this the first thing that we do is we set a name for this workflow and in this case I'll just go ahead and say Hello World GitHub actions then we want to define a trigger

**10:22:03** · a workflow trigger what is actually going to make this thing run so that's the point of what we're designing here we're designing steps to make this run very similar to a Docker file actually it's not the same but it is similar in how it works in terms of these are a bunch of steps that need to happen in this case is to build a Docker image in GitHub action workflows it's just to make sure that something runs so what we're going to do here is we're going to do on and we're going to decide that the push is what we're going to be doing push as in a get and push the next

**10:22:37** · part is the actual branch that we want this to run on so when a push happens on our main branch this workflow would then run so the next thing is what is it going to run that's where we then declare jobs so far everything that I've used in the terms of whatever's here and

**10:22:58** · then colon those are all built into the workflow the things that aren't built into the workflow just yet is the name itself I actually gave it that and then the branch I decided so this Branch could be whatever gibberish if you wanted to jobs is one of those things that we need to name it jobs this next part is where we can start to divert from that we can now give each job a

**10:23:18** · different name or a different parameter inside of this yaml so in this case I'm going to go ahead and just call it hello you could say hello world if you'd like but in this case I'll call it hello so inside of this parameter I'll then start to design all of the different things about this particular workflow and all this means is I'm going to bring in some steps in here and the very first step I'm just going to go and say the name is just say hello there and then what it's going to do is run Echo and hello that's

**10:23:47** · it so that's what it's going to do so that's my main job here but there's one other aspect about this job that we need to declare and that is where are these steps going to occur so that means very similar like in a Docker file at the very beginning we say hey we want python 3.2 which is saying hey some other Docker image which likely is built on

**10:24:09** · top of Linux in this case especially with python and a lot of Open Source languages so what we do here is we actually need to declare that as well so we go ahead and say runs on and in this case it will be untu and latest so this is a Linux version of an operating system that it's going to run on and it's just going to run on the latest one there are other versions that you can use but I want a general system that I can work off of and that's what I'm going to use so with this m i I'm going to go ahead and Commit This to git so we

**10:24:38** · go aad and say Hello World GitHub action workflow something like that commit that we'll go ahead and say yes we will sync these changes to GitHub and then we'll jump into our GitHub actions go ahead and navigate away from this workflow we do not want to create it or save it that will cause a little bit of conflicts with it uh but what we've got here is now this workflow is going to run so when I mean run I mean it literally went on another computer and ran this job so this job here's the

**10:25:08** · operating system here's the image which is a container image just like a Docker container image all of the things related to this actual job itself that it runs are steps the things that we have in here in our case we just ran hello and it runs that that's it that's all it does it's really just that simple which is actually really really nice but the thing is notice that it only runs on a push in other words I can't go into actions here and I can't run this workflow again there's no way for me to run it I could rerun old ones but I

**10:25:38** · can't rerun or run a new one so there's another trigger we can use which is called workflow and dispatch let me go ahead and open up the actual file file here we can come in here and say workflow dispatch just like that and now I'll go ahead and say added GitHub workflow

**10:26:02** · dispatch okay we'll go ahead and commit and sync these changes once again I did a push which means that it's going to run so if I go back into GitHub actions it's going to run again but the cool thing about this is now I can select the workflow over here and I can can actually run this workflow I can click on this run workflow here because I have that workflow dispatch trigger so I can literally run this at any time really

**10:26:27** · really cool the next thing is let's go ahead and get rid of this push there's another one where you can do a poll request and run this there's a lot of different options as far as workflow triggers are concerned but what I want to do to wrap up this video is or this portion is bring in something called schedule and so what we can do is we can actually do a cross schedule in here as to when I want this to run so let's say for instance we want it to run every day at 3:30 so we would put 30 3 3 is

**10:26:59** · actually 3:00 a.m. 15 would be 3 p.m. so we would do 15 and then we would say um every day of the month every month and then every day of the week okay so this is confusing if you aren't familiar with KRON that gets confusing so you can go to Kron tab.

**10:27:17** · Guru and you can try the same thing out so if you wanted to run every 30 minutes at 3: there it is at 3:00 a.m. if I change this to 15 there it is at 15:30 which is of course the afternoon 3:30 and that's going to run every single day and of course if I were to do a comma here I could have it run in the morning and in the evening or in

**10:27:41** · the afternoon so 12-h hour split between the two of these if you wanted to run at 2: a.m. and 2 p.m. you would do something like that and change this to zero if you want it to run every day at midnight you would just go ahead and say 0000 or 1:00 a.m. or 2 a.m. and so on so there's a lot of lot of interesting things about Kon itself and the uh you know cron tab.

**10:28:05** · Guru is a great place to just kind of play around with this but the nice thing about this is now I can have this run on a schedule and have it run uh whenever I decide this is the main thing this is why we have this entire project granted we still have to build out the steps for this to make sure that it's working correctly um but in my case I'm going to go ahead and comment out the schedule for now because this actual workflow I don't need it to run on a schedule but I did want to mention these three options that are available to us and they are pretty

**10:28:36** · great so let's go ahead and now look at how we can start implementing this in a more practical use Case by just testing our D Jango project so GitHub action plugins are one of the main reasons to use GitHub actions there's a lot of ones that are built in from GitHub themselves like they made a ton of them so you can always go into github.com actions and you'll see all

### Testing Django Basics with GitHub Actions

**10:29:03** · kinds of GitHub actions in here that you'll probably want to end up using and we're going to use a couple of them right now so the first thing that we want to do though is grab into our workflows we're going to go ahe and duplicate this one and we're going to call this test Jango basic Bas okay so

**10:29:19** · in here in this new Jango basic one we'll go ahead and do test Jango basic in the triggers themselves we do want the workflow dispatch but I also want the push in here so that this just runs whenever I push it at least while I'm testing this out and I'll get rid of some of these comments so now once again we'll go ahead and just change the name of this job to Simply test and then we've got the runs on that's fine and then we've got our steps in here so the very first thing that we actually need to do is we need to check out our code

**10:29:49** · so you do something called checkout code this is incredibly common and it's probably one of the most used GitHub actions items or plugins and we just go ahead and say uses actions SL checkout so this is one of those plugins that we can grab and so if we actually go into github.com actions checkout hit enter this will

**10:30:13** · take us to that plugin and if we scroll down to it we see that it says checkout V4 four but then we also see a bunch of things about this action there's a lot there's a lot of different parameters we can use in this action in our case we don't need that many parameters because this is going to be checking out the same code on our repo so it's going based off of the code that's actually in the repo if you don't do this step the code won't be there you won't be able to use it so that's actually fairly straightforward next up what we're going to do is we're going to set up Python

**10:30:43** · and once again it's going to use a built-in action so we do actions set up- python what do you know simple enough I'm going to go ahead and grab this go into GitHub actions and just do set up python there it is another GitHub action it's telling you you can use it you can scroll down here and you can see all of the parameters that you've got with setting up python to make sure that this job runs with python so I can paste in here with the new one of GitHub actions just

**10:31:12** · like that and let's go ahead and bring this back a little bit and tab this forward and we've got set up python at version 5 and then the python version we want to use well the python version that we want to use is going to be 3.12 just like our Docker file so that's the one I'm going to stick with so the there's consistency within the environments now

**10:31:31** · this is not a Docker file right but it is able to build Docker images for you if you wanted to so in other words I could actually use this Docker file to do a lot of the same things I'm about to do but we're going to keep this really simple and not go down that route at this point I'm just going to go ahead and test out some very very basic things within jeno so the next one is going to be well installing requirements so

**10:31:55** · installing our pip requirements and so now that we have python installed here I can use this run argument and we can go ahead and say python DM pip install pip D- upgrade now hopefully this looks familiar to you inside of the docker file if you actually look in here we

**10:32:13** · have our pip install R requirements.txt look looks like I didn't actually update pip in here oh there it is upgrading pip right there so this is very very common inside of Docker files as well and it should be very common in your python applications so with that I can actually run these pip install um and then I can actually try and run the PIP the python-pip install R requirements.txt

**10:32:37** · now I already know this is going to fail for a very specific reason and that is where my working directory is so I can actually come into this installation process and change the working directory right here to SRC which of course is/

**10:32:54** · SRC that way I can grab wherever the requirements end up being but in my case the requirements are right here so perhaps I don't need this working directory just yet so let's go ahead and do that next after I install these requirements I'm going to go ahead and run my Jango tests this time I'll definitely need that working directory and it's going to be slsrc

**10:33:17** · and I'll just go ahead and run python manage.py test now I could always do a CD into here so I could actually do CD SRC if I wanted to inside of that run and then run that manage.py test but I'm going to leave it as this okay so that is

**10:33:33** · something that is a simple way to run various tests in your genuo project I don't actually have any tests written just yet but the idea being that this is something you would probably want to do in the long run build out your entire test suite for your entire application so so let's go ahead and Commit This and we'll go ahead and do our test Django basic workflow and I'll go ahead and commit and yes and then we'll sync the changes and then we'll go ahead and take a look at our GitHub actions project here so we'll go back into our repo into actions

**10:34:07** · and we should see that the test workflow is now starting to run and so it will take a moment for this to happen but the thing is it sets up python incredibly fast because it's probably using some sort of cached version then it upgrades the actual pip installed that's in there and then it's going to go ahead and do our installation process as well so this looks like it's only doing one thing but it's actually doing two so we see that it's running our requirements it installs literally all of our requirements and then we scroll down and wait a minute Jano tests failed they

**10:34:40** · they worked fine locally but they failed in production or rather in GitHub actions and so this is hopefully obvious Maybe not but the idea is our jeno secret key was not found this comes back to what we actually did to make sure that that is there so in our CFE home

**10:34:58** · settings if we scroll up to the secret key we don't have a default setup so it gives us that error we saw that before long time ago but now we can see it in action with GitHub itself so what we want to do then of course is to enrich the environment for this and we'll take a look at how to do environment variables right

### Environment Variables in GitHub Actions

**10:35:21** · now now we're going to take a look at how to use environment variables inside of GitHub actions so that we can actually test our jle project now I just duplicated the previous workflow we just did and I just commented out that previous workflows automated run and then I just go ahead and build based off of that so the idea here is we want to declare environment variables inside of the step itself the D Jango test step I'm going to go ahead and do D Jango Secret T and set it equal to something

**10:35:49** · like not good or set it to the value of not good so these environment variables should mirror the sample right so we've got this sample here I could probably copy that whole thing in here and bring it in and go one by one make sure that you turn the quotes into colon and do something like that uh but I'll just leave it in as secret key is not good and just test this first so we'll go ahead and now do that I'm going to grab these test bars here we'll go and just name it that save it and commit and so what we should end up seeing is this secret key actually being fine for this

**10:36:22** · test it's not good for production but as far as what we're doing here it's probably just fine so the next thing is I'm going to go ahead and do you know something like Jango debug and we probably want to set that to being zero just to make sure that we are explicit that we do not want testing mode on for this one so that's actually kind of cool we could put it directly on the step itself we can also bring it up one step further and I can cut this out here and I can put it on the entire job

**10:36:51** · itself so I could bring it up here and paste it just like that which is also really nice so this allows each one of these steps then to have access to the environment variables that are up here so this is fine and all but what if we don't actually want our Jango secret key like this what if we actually wanted to generate one on the Fly inside of these steps so the way that's going to be done is we'll comment this one out and then we'll come in here right after setting

**10:37:17** · python we'll go ahead and set up our D Jango secret key and the way we're going to do this is by using a built-in feature inside of ambunu or Linux distributions the first thing is I'll go ahead and say my key equals to we'll set it equals right next to each other with dollar sign and parenthesis this right here will allow me to run a command called op SSL Rand and then d-b 64 and and then 32 so if

**10:37:50** · you actually have a Mac or a Linux locally you can run this command and you'll see it's going to generate a key that looks like that you may have seen that before that's it now you could also do something with python in here there is one for python you could probably even after you install Jango you can even use D jango's built-in mechanism to build one that's not really the point here the point here is to see how to actually use this in our environment so

**10:38:13** · right now my key is not the actual secret key that we want to use what we want to do here is we want to say Echo and then we want to bring in the environment variable that we're going to use into GitHub EnV so let's say my VAR

**10:38:30** · equals to my value something like that and then my VAR would be used in our case it's not my VAR we want Jango secret key so right now D Jango secret key is set to my Val it would actually be down here as my Val when we run that test but if I want it based off of some other program some other result then I can use this my key here and literally put a dollar sign in front of it and do something like that I'll call this my generated key and or I'll just say gen

**10:39:03** · key just so it's a little bit easier uh and then we've got this is going to be the value that's going to be equal to whatever is in here great so that's the string substitution that would end up happening for this so at this point I now have a new version of it this is how you're going to want to do it if you need to generate them on the Fly this is how you're going to do it if you can just set them and just leave them as is

**10:39:28** · now that is pretty much it it's pretty straightforward in terms of how these environment variables work but of course they'll get better once we actually use secrets we use something that's also built in to GitHub actions if I go to this test here I should probably see something related to it and we've see the Jango debug is not found so maybe

**10:39:47** · um that's kind of strange that it says that because maybe I didn't commit it I don't know but anyways now that we've got that let's go ahead and add in this environment variable here and I'll just go ahead and go into my source control and say updated committ it yes and then

**10:40:04** · push and then we'll go ahead and wait for a moment in GitHub actions for that to finish I suspect the reason this one failed is because this actual test did have a jeno secret key but it did not have jeno d bug being set anywhere which

**10:40:19** · of course is something that we also did in our code if we go back into our settings here Jango debug does not have a default value so I just needed to set it inside of there as well which is what we ended up doing and so now with that new test we should see hopefully uh all

**10:40:35** · green and sure enough we do now of course I don't actually have any Janu tests on here no automated tests whatsoever and so if you were to go down the route of cicd this is what you would want to do you would actually want to make sure that you have all of the necessary environment variables set up in there to go forward but what I want to do in this next part is I actually want to use something called the GitHub actions Secrets let's take a

### Github Actions Secrets for Database URL

**10:41:03** · look now we're going to go ahead and test Jango with a GitHub action secret this GitHub action secret means that it's not going to be exposed or displayed at all inside of our workflow as we'll see in just a moment so the way I did this was duplicate the previous workflow turn that one off and then basically build based off of that so the first thing that I want to do though is actually create a test case for this to actually work so inside a Commando here I'm going to go into test and I'm going to go ahead and do class and we'll call this neon DB test case and it's going to

**10:41:36** · take in the test case here and then all I want to do is Define test DB URL and self. assert in and then basically see if neon.pdf

**10:42:09** · that that's in there or at least it is configured in there by going into our settings and sure enough there it is right so what we want to do here is we're just testing That Neon dote is inside of that database URL itself uh we can also test if that database is none right so uh basically the assert and

**10:42:28** · kind of tests both if it's none or not but let's go ahead and run this test here on our local project so if I do python manage.py test it's going to do a couple things first off it's going to create a test databased and it actually will find a test so that means that it will take a little bit of time for this to run because in this case it's running off of my Dev Branch for my database URL so

**10:42:54** · naturally neon dote is inside of each URL domain here if that changes for some reason you would see that in these tests which is also kind of nice but here we go now that I've got that I've got the ability to actually test whether or not that value exists and it works correctly so what I going to do now then is set up that value inside of my jobs here I'm going to go ahead and do my database

**10:43:19** · URL and we want it to be equal to dollar sign curly bracket curly bracket and then Secrets dot whatever we want to name it so you could call it something like mycore database URL or let's say neon database URL or whatever so I'm going to go ahead and leave it in as neon database URL just to highlight that point and then we'll go into our settings here and then I'll go into my

**10:43:44** · secrets and variables under actions I'm going to go and do a new repository secret and we're going to bring in a neon database URL here so of course the way this is going to work then is we need to go into our console we need to go into branches and we're going to create a brand new Branch from our main branch and I'm going to call this GH delete now the reason I'm calling a GH delete is because I want to think of this Branch as being temporary and something that is okay for me to delete at any time if it's there my Dev branch

**10:44:13** · is really my local branch something that I probably don't want to change right so in my branches here I don't want to delete this one I don't need to change this one the delete branch is the one that I want to change and delete so that's the one I'll work off of and we want to grab of course our connection string I'll grab that from the dashboard here it is right here I'll just go ahead and copy that snippet bring it into my GitHub actions and go ahead and add this secret here now so there it is it's quite literally inside of my repository secrets and this is how I can reference it and so if I were to try to Echo this

**10:44:44** · out let's go ahead and do that I'm going to come in here and I'll go a and say name and show database URL and I'll go ahead and do run and Echo the database URL which is as simple as just doing that because

**10:44:59** · that's the environment variable itself now another thing you can do just to make sure that it's definitely going to work inside of the environment the actual U GitHub actions environment is to use dollar sign curly brackets like that EnV Dot and then whatever the environment variable is that you set so it should work with both both of them this is the one that will definitely work uh in the long run especially with the older kinds of environment variables

**10:45:24** · okay but the thing is we didn't set this for our test database ever and it still worked so the other method of echo dollar sign and then the environment variable as to what it should be that those both should work in some sense but now we've got this database URL let's go ahead and do our get status I'm going to go ahead and add everything and we'll go ahead and commit to everything I probably should have done it on vs code sorry for those of you who do not know get that well I'm going to go ahead and do that and then we'll go ahead and do get push

**10:45:54** · okay so with this in mind I'm going to go back into the GitHub actions and this should actually now run a test all of the other ones didn't so we'll have to wait for this to go but the idea here is this should run a test with our production database if we go to show database URL uh notice that it's not

**10:46:13** · allowing me to see anything yet but we've got here is I did Echo and Echo so it quite literally didn't show the database URL at all it hides it from us so this one it didn't show it at all which is pretty interesting okay so with this in mind I can now see that it's running everything and then now it's going to run that test and of course this actually does do a test and we should see that it is valid so it might

**10:46:39** · take a moment for it to happen but it will actually run it because the reason it's taking a moment is because it's actually creating a test database in Neon right so in this database here it's quite literally creating a brand new one which is bringing it up making sure it's running notice it's active now and then it's going to go ahead and finish off whatever those tests are for however long that ends up taking which of course didn't take very long and it did the test correctly and it was able to assert that that

**10:47:15** · neon.pdf well instead what I'd rather have happened is a new Branch happen every single time I want to test this maybe not every single time but having the ability to create a new Branch right in line and not have to set the database URL myself but rather have GitHub actions do all of it using the neon uh command line tool so that's what we'll do in just a

### Branch Neon DB for Django Tests

**10:47:41** · moment now we're going to go ahead and automate the process of having a branch database from Neon inside of our GitHub actions now in this case we're going to use it for the test just to make sure that it's working correctly in the long run you might use it for different things like analysis on your actual production data without using your actual production database now we will see how to use the production database as well but the thing is here is the

**10:48:06** · caveat is this database URL right here is just fine using that manually mated branch and just sticking with that is absolutely okay you could do that for a very long time but what I want to do is actually set up the conditions to have the ability to automatically Branch my database or the ability to use my production database and the way that's going to work is through the neon command line tool and this is the neon CLI so that means we're going to go ahead and use mpm to install this which requires no js18 or higher which will

**10:48:37** · probably change over time as well but the idea is we want to run this command here so using the same method that we've been doing I created a new actual GitHub actions work flow and deactivated the old one so what we want to do is the very first steps we've got Python and checking out the code the next step is going to be our setup nodejs so setup node and this is going to be uses actions SLS setup and node no surprise there let's

**10:49:09** · go ahead and see what version is currently available on GitHub with setup node and the current version is four okay so that's the one I'm going to use is at version 4 and then we'll go ahead and say with and then I'll just do node

**10:49:26** · Das verion and we'll use 20.11 I think there's other ones that you could use you could probably use node 18 as well uh but it's up to you on how you want to go about doing that okay so once we have node available to us we can then go ahead and say install the neon CLI and this is going to be simple it's just going to be run and this is mpm let's do a pipe here and we'll do mpm install dashy neon

**10:49:57** · CTL and so of course that's coming from the docs itself so it's literally this same command here and this will now set up the neon command line tool so the idea here though is in our environment variables what we want to set is things related to Neon now so the neon API key

**10:50:15** · we want to set in here now instead of this database URL so I'll go ahead and get rid of that and this of course is going to be our secrets we're going to use the same process we did there and this is going to be the neon API key so to do that we'll go into the neon console we're going to go into our user account under account settings API Keys create a new one and I'll call this my SAS GitHub actions key create that we'll

**10:50:41** · copy this value we'll go into our repo navigate into the settings navigate into our secrets and variables into actions and then go ahead and create a new repository secret I'll paste that secret in and then I'll go ahead and do my neon API key let's just

**10:51:00** · verify that it is the neon API key right here right here and also in the docs itself so if we do a quick search for it we can do and see that the API key so we don't actually have to append it to every call but rather just add it in our inv environment like that which is why I put it in as environment variables here as well great so now that we've got that the neon command line tool is set up it's all ready to go so we can start doing various things the first various

**10:51:30** · thing I'm going to do is I'm going to go ahead and delete previous Branch so what branch name do we want to give it well we can think of a couple different ways on how we could do this so back into our project we're going to go into SAS here the branch is the GH delete Branch right so I'm going to come in here and I'll go ahead and do my neon uh you know let's say GitHub

**10:51:53** · branch and this is going to be gh- delete okay and then we'll go ahead and do our neon prod Branch these are just environment variables that I'm coming up with here you can name them however you'd like but we've got our neon production branch and our neon uh GitHub actions Branch so I actually want to delete this one off out of the gates so we'll go ahead and do run and the way we delete it is going to be neon CTL branches delete we put in a string here

**10:52:25** · and then we also need our project- ID so let's verify that that's actually in the command line tool arguments themselves so we've got our Global options we don't need to look at the global options we need to come up here and look at branches if we go into branches and scroll down a bit we can see that there is the delete option here

**10:52:50** · and so we've got delete ID and here are a couple of arguments we can put in which of course I've got my project ID here as well and this is only if you have one or more project in my case I do so I do recommend that you put this because you'll probably at some point have one or more project so coming back in here this is now going to be our neon project ID this again will be a secret

**10:53:13** · value I don't necessarily need this exposed for no reason and so that's going to be the one I'll use so then we'll put that into quotes as well so how do we actually use those secrets well once again we do dollar sign and then two curly brackets we use EnV Dot and then the actual value itself so the GitHub Branch name just like that and then our project ID and dollar sign EnV just like that

**10:53:40** · okay so what if this Branch doesn't already exist well inside of GI actions we can actually do something called continue on error and we can just say that's true so if this does error out which it probably will if this Branch doesn't exist then we'll go ahead and keep going now there's a couple things that I still need to set up which is one of them is the neon project ID in my secrets so going back into action secrets we will make sure the API key is in there now and then I'll go ahead and create my project ID the way you find

**10:54:12** · this is by going into your console at least this is one of the ways go into your project I'm already in my SAS project go into settings and then just grab whatever ID is in there put it into your action secrets and there we go so now we have the ability to delete the branch so after we delete the branch let's go ahead and create new GitHub actions

**10:54:41** · Branch so this same process would be used for creating a staged Branch if you wanted to in our case we're not going to Stage anything we're really just going through and testing stuff that's pretty much it and so once again we got branches this time it's going to be create and then we do D- name and then whatever name we are going to be using which of course this is going to be the same thing which is that GitHub uh Branch itself okay and so we've got that

**10:55:10** · again so this is going with a brand new fresh one but there's one more thing that I want to add onto this create call and that's Das Dash and parent and that's going to be the main branch that we had that's going to be coming in here which is going to be our prod Branch so that's where we're going to be branching it from and that will go ahead and create that for us fantastic okay so the

**10:55:36** · next step is going to be essentially very similar to this but the thing is here I do not want this to continue on error if it fails to Branch we bu to stop so we can diagnose the issues that are going on now one of the ways to make sure that these commands are correct is if you installed the neon CTL locally

**10:55:55** · and ran things based off of that I'm not doing that right now because I'm going to use GitHub actions to do this test for us but if you're having a lot of issues that's what I recommend that you do I've already worked out all of these things so that's why I'm doing it here okay so we probably don't need to set up the secret key just yet but I will go ahead and set up my next portion which is going to be be my database URL for this Branch so I'm going to go ahead and copy this and we'll go ahead and do uh database URL EnV value for new GitHub

**10:56:28** · actions Branch great so the way this is done is using neon CTL again and then we're going to go ahead and grab the branch that we've been using which is going to be that same Branch so we'll do Branch here and then we'll change this to instead of create but rather just connection D string grabbing that Branch keeping that project ID we do not need the parent now

**10:56:53** · so this is going to be the command that we need to run this command is hey what do you know it's very similar to what we've got going on here so I'll go ahead and say my neon connection string is equal to dollar sign dollar sign parenthesis all

**10:57:12** · the way around that entire thing then once again I'll go ahead and do something similar to what we just did which is again taking our connection string and then our database URL is equal to that connection string we are not going to Echo out that database URL anymore I'm going to go ahead and install the requirements and everything should go through as well as our test I also want to make sure that my database URL is no longer active from the secrets themselves because this connection string should do it for us

**10:57:42** · great so let's go ahead and save this and then I'm going to go ahead and commit it let's go ahead ahead and come in here commit yes and sync those changes and we'll go ahead and say okay so now I'll go back into my repo go into GitHub actions I'll go back into my repo

**10:58:03** · get so I'll go back into my repo go into our actions here and watch the workflow actually go through uh which ideally speaking node and the neon CLI will work just fine deleting Branch what do you know there it goes deleted the branch created a new Branch simple enough um so

**10:58:22** · it's going to retry if it's locked and then it did so far so good connection string looks like this thing is working okay uh let's go ahead and see if it ends up working in in terms of the actual tests themselves which I think this will also work and look how fast this is going and that's the other part about this that I really appreciate all of this is incredibly fast if I were to try and Loy this to a virtual machine

**10:58:48** · directly and then run all of these different commands it would take far longer than this this just did the test and the database URL ended up working so one of the things that I'll probably want to clean up at the end of this is to once again delete that Branch actually run it twice so the reason I deleted up front is just if I did create it somewhere I just want to get rid of it run that Branch run all the tests do all that stuff and then I'll just go ahead and call this my cleanup process so I'll just say clean up

**10:59:18** · step right that way that Branch doesn't need to hang we can have it hang but it's going to delete anyway and so the other part about this is the actual Branch itself we could think about calling it something different a little bit more random or maybe based off of something else within git that is something you could think about so that you're not actually having a branch just

**10:59:40** · you know just have some Rand random digits here that you could do and there's a lot of different ways on how you can do that one of the ways that think about it it would be very similar to what we did within here we can actually create a random number use that random number alongside of when we actually go to create the new Branch but that makes it a little bit harder to delete in the future as far as automatically deleting so I'm just going to stick with this GH delete for that Branch then we'll go ahead and update this and I'll go ahead and do with

**11:00:11** · cleaning commit yes and run those sync changes again and I'll let that all finish but the main thing is I just want to check my branches that this delete one does go away all right so let it finish clean up step that actually did delete that branch and we can verify this in the console as well and there we go so we now have a way to fully automate that process which I think is great naturally

**11:00:34** · we could do so much more than just testing the code out we could do everything you might need to do with your production database at this point or even your development database the actual branch that you are branching or the actual you know production Branch you can use main you can use Dev you can use anything you can think of the other thing is this exact same process could be used for making a actual different stage that you Deploy on a production service so that you do this prior to

**11:01:04** · fully deploying it on any Production Service itself now that's outside the context of this series but overall this is now set up really really well for what you might want to do within neon now the other aspect of this that I want is actually using the production database with this Theon API key and

**11:01:21** · making sure that I can actually sync all of those management commands on some sort of schedule so that's what we'll do now I'm going to leave this Branch test one on I'm going to keep it on and then we'll take a look at also how to do the different scheduled commands that we want for our stripe and neon database stuff going

### Scheduled Production Worker with Django Neon Stripe and GitHub Actions

**11:01:44** · forward now we're going to go ahead and create our scheduled worker process that one that's going to do those Jango management commands for us with all of our production stuff available so the idea here is it's not going to be on any given push it's going to be on the schedule so I actually have a really good example from GitHub itself that we

**11:02:04** · will be using to make sure that this is running on the schedule that we want it to run but before I get there I want to make sure that I set up everything that I need for the environment variables one of the things I will need is is the stripe secret key so going back into our

**11:02:19** · project here I'm going to bring in that stripe secret key as a new secret that we want in our environment so this of course means that we need to set it up on our GitHub actions so let's go ahead and jump in to that project into our settings here and then we'll go ahead and navigate into our secrets actions and then we'll go ahead and bring in our new stripe secret key now in your case you're probably going to want to have a production one as in not SK test right

**11:02:47** · so we've got that we want to have a production one but I've got SK test for now the next thing is we're going to go ahead and have to set up this to use our primary Branch altogether so coming in here I do not need the neon uh GitHub Branch anymore I don't need the database URL I'm just going based off of the fundamental things that I will need to do the various aspects my production worker needs so I'm going to go ahead and scroll down here I'm going to still install neon yes not going to delete or

**11:03:17** · create a new Branch here I don't need those two things I do need the database URL environment variable so the connection string now the branch is no longer the GitHub Branch but rather the production Branch yes we are using the production code here um and so we're going to go ahead and put that production branch on and now everything else should pretty much flow pretty well I don't need to delete anything so I'll get rid of that now I need to know and

**11:03:43** · make sure that I can run the various command bands that I need to run I do not need to run tests here that is in a different workflow altogether but I do need to make sure that everything else is set up so these are going to be our sync commands so inside of our subscription we've got our management commands in here and this is our sync user sub so D Jango users sync stripe

**11:04:07** · sub subscriptions or something like that and we'll go ahead and run the first one that we want to do which of course is just syn gain the active Subs so we go ahead and grab this and we'll do our python manag P py sync user Subs

**11:04:23** · now if you remember back if we did the sync user Subs here and of course that syns in everything which is not what we want we actually just want things from today so that's what I'm going to do I'm going to go into my subscriptions and I want to make a slight change to my utility function here so in my utility function what I've got is the syncing these things and we see that day start is greater than zero I want to say that it is greater than let's say -1 so

**11:04:49** · basically zero or above that will allow me to have today being the range that I might want to use you could also adjust some of those things as well as being -1 instead of zero so if we wanted to do zero we totally could which is just an oversight that we had from that one but the idea now is then I can say day start being zero and then Day

**11:05:13** · end being zero and so that should give me today now this doesn't show me today so we will look at that in just a second uh with it being verbose if we want to but all the defaults in here I'll put as negative one as well just so that I don't accidentally use all of these over again

**11:05:34** · um within there okay so with this in mind I'm going to go ahead and print out the day start and the day end based off of if it's verbose or not so I'll go ahead and say verbose equals to verbose which means in my range for this model I'll go ahead and say verbose is true mostly because of when I'm going to be using this my default will be verbos so I'll go ahead and say if verbose then we'll go ahead and print out the

**11:06:00** · range range is to so we can put in our start and our end okay so let's go ahead and try this again we'll run that we've got a range that's today that's the end of today great so that will run every day for that to make sure that everything's working correctly with those updates in other words back into our production worker here we will go ahead and use these two I'm going to copy this and then run that great so we

**11:06:34** · could also do Day end as in tomorrow right so might as well go ahead and sync all of those things it's probably not going to be that many Subs in general but it gives me a pretty good period that I can work off of instead of just everything which is the main part of this great so I did say that there was one other you know command that we might want to run from time to time and so the way I want to do this is by looking into the GitHub workflow documentation for

**11:07:04** · schedules which of course is linked right here we can actually see there's a way to skip different schedules so we could skip it based off of different cron schedules that are in here basically having this condition in here I'm going to go ahead and come back down we'll change this to if G event is not equal to some schedule then now what we'll do is we will actually um you know clear the dangling stripe subscriptions

**11:07:33** · which was you know the command of clear dangling I believe so we'll go ahead and try that command locally let's just make sure that that's the case and yep sure enough it is and it goes through all of them so it's going to go through all of them which is important okay so now what is the schedule that we want to have so going back in here I'm going to copy this schedule right here and we'll paste it in now once again if we go into Chron tab.

**11:07:59** · Guru we can figure out what this schedule is going to be so what I want to do is at like 1: in the morning I just want this to run so 1 in the morning we'll do run at exactly at 1 and then I'll also run it let's say for instance at noon so this is maybe a good idea to have it run twice in a day for those two different commands so I'll go ahead and run this this should be done every single day right so there we go next up

**11:08:27** · what I want to do is bring that same idea and get rid of that schedule from this one down here that's not the schedule I wanted to run at but instead what I want to do is I wanted to run one time in the entire month which I'll do it at like 4:00 a.m. and this is going to be every month and then what day of the month we're going to do we will do it at the first of the month so it's that so I'm going to go ahead and copy this bring it in as our other schedule

**11:08:57** · now what I'll do is actually change our condition a little bit and I'll go ahead and say if it's equal to this schedule great and then I will go ahead and grab this one as well and bring it up and set it equal to the other schedule

**11:09:15** · and there we go the challenge with that of course is the fact that well I pretty much do not want this to run only at that time I might need to run this as one-offs so this one I'll actually go ahead and say if it's not equal to that schedule itself and we'll see if that oneoff even works at this point great so now that we've got that let's go ahead and do get status get add-- all get commit and

**11:09:44** · we'll put our message m in here as our scheduled production worker and we'll go ahead and do get push okay so we should have pretty much everything we might need now the other part about this that you might consider at some point is adding in all of your email related things now in the short term you could probably still use the Gmail stuff it may or may not work on GitHub actions

**11:10:07** · based off of how Gmail is configured it might actually block that I can't say for sure but of course you'll need to create another application password and all that but the general idea is you could probably put email or you probably should put email into your GitHub actions so that when it does run it runs

**11:10:25** · when it needs to um and so one of the things that just happened is it actually ran when it was pushed which it should not oh wait this is the other one this is running the tests great so that's a good side so it's showing me that it's running the test but that's the commit name I so let's go ahead and run our scheduled production worker which has no workf runs let's go ahead and run this now and so if this was done correctly

**11:10:48** · what we will have is we will actually use the production database we'll grab Main and then we would run all of the things related to it which is off of this scheduled production worker itself so one of the things it's not doing on the production version at this time is migrating the database so this might be a good place to also migrate the database inside of GitHub so we'll go ahead and do Jango migrate

**11:11:17** · database get rid of the schedule part and then just run manage.py and migrate there we go and so we'll go ahead and do get status get add Dall get commit and then added migrate to DB and

**11:11:35** · we go ahe and push that in fact this actually might need to be in the test of the branch database as well because if we are branching the production database and wanting to do tests there's a good chance that we'll need to Branch it also and then migrate it on that that change

**11:11:51** · so that's another thing that we probably wanted to do and so what we've got here is now I've got this invalid stripe key for production that is correct this is not a production database and or rather a production stripe key that we've been using so when we call this value error um this is actually great sign showing us that hey you can't have SK test in in

**11:12:15** · this stripe secret key so it automatically gives us this error uh which is also very very nice that that is the case um and it gives us well the need to not use a stripe test so in our case since we are using uh you know stripe the actual test version I will go ahead and say d Jango debug is equal to one but now I'm going to go ahead and put it in as a secret just like that and

**11:12:45** · and so we'll go ahead and use it inside of the GI him actions go ahead and do settings and into our secrets here pository secret Jano debug being one add that secret and there we go now I'll go ahead and do get status again and we'll go ahead and just say that we updated for stripe and migrate commit

**11:13:15** · yes and sync okay the only reason I'm doing that debug as a secret is because I don't actually have a production stripe key and I won't I'd rather my code have that that value error if I try

**11:13:31** · to push this into production without a stripe key than anything else right so I'm okay with what I just did for that reason um but of course if I were to try to put this actual project in production on Railway I run into issues because of that stripe um actual value error that we have okay so at this point I'm going to go ahead and let this finish off this of course is that test now that we've got migrate great and then let's go back

**11:13:58** · into actions we'll go ahead and do our scheduled production worker once again we'll run this one and this should actually solve that problem for us and then of course months or in a few weeks or however long we can come back and test and see that this action actually went through and it did run things according to what I have set up uh which I think is pretty nice and there it went sync active Subs it tried to do it for the day right now and then the day ending and then we've got our D Jango

**11:14:28** · users clear dangling was skipped because it wasn't on that schedule but there we go we now have the ability to have a scheduled production worker using GitHub actions and neon with its branching or it's just its production database which makes things so clean and easy now we

**11:14:48** · can just build out any other commands we might need to run on some sort of schedule with those conditions as we see fit but the main thing being that we can run these commands just fine I will say you definitely should get your stripe key going so your J debug is back to being zero so yeah that's pretty much it

**11:15:07** · maybe we do something more like a stripe override so that's actually something that is worth considering as well is wherever we put that stripe stuff so inside a billing here maybe we will put the stripe test override as one so test override because I really don't want to have the D Jango debug being off so we go and say override the default being false and Boolean and then we'll go ahead and say and not stripe override in there okay so

**11:15:41** · there we go so back into this production one we will put that back to being zero and the stripe override being one and then we'll go ahead and add that in so added stripe override stripe test override commit yes and sync those

**11:15:57** · changes once again that is not something I want to do in production ever right either one this value error is far more important but we still need some practicality here and having that override is probably better than D Jango debug right having one single line for the the actual payment processor but

**11:16:19** · even that is something we probably don't want to do either CU we don't want our users to accidentally put real credit cards into the stripe test because we don't know if that stripe test is production level either I'm sure it is but there's a chance that it's not so we definitely want to really consider how we go about doing this going forward but at least I have a way to run my

**11:16:43** · different tests in here now and also my different worker processes so yeah hopefully that works let's go ahead and run it one more time and there we go we've got the production worker test it looks like it worked let's take a look the stripe subscriptions looks like that's going through so that override works and we are now Off to the Races

**11:17:02** · it's pretty cool I really really like GitHub actions for a lot of things this just really kind of scratches the surface because there's a whole other side of building out the containers so what I would probably also consider doing or maybe more likely do is have another test or another step in here

**11:17:20** · that would actually build out the production container and then that production container would do the production worker stuff that I use so this production container down here but that is getting to a level that we just don't need at this time because with

**11:17:35** · what GitHub actions does out of the box it works really well but of course we also probably want to test out that container to make sure that also works really well so the production worker would probably go based off of that instead of this which would just mean that we would run these commands down here based off of the container which is just a com like a Docker you know run type of command that would happen inside of there uh so that's a little bit more advanced than something that you can look into

### A Better Landing Page with Flowbite

**11:18:03** · doing now we're going to go ahead and improve the user experience starting with the landing page this landing page is not great whether or not they're logged in or logged out we want to actually improve this quite a bit so the way we're going to do do that is by using flowy blocks and then coming in here into marketing UI and we'll see how this shakes out in just a moment the first thing that I want to do though is actually want to create a brand new app for this so we'll do python manage.py start app and I'm just going to call the app itself Landing because we want it to

**11:18:33** · be very specific to the landing page itself and so we're going to go ahead and Define a brand new view and we'll call this our landing page view and it takes in a request and it would return render and then the request of course and then our templates will do landing and we'll go ahead and do main.

**11:18:52** · HTML and there we go so that's what we will then render out in our homepage so on CF home I'll go into my URLs here and we'll bring it in with from Landing import views as Landing views and then

**11:19:09** · we'll go ahead and change this to Landing views. landing page view I'll get rid of these things in here and now we've got our landing page view of course if we go back in the template does not exist yet so let's go ahead and create that template into our templates here there we go and what I'll do is I'll actually copy home.html paste it in here I'm going to get rid of home.html because I'm not going to use it anymore and so now I've got main.

**11:19:36** · HTML in here I'll get rid of these old things as well and then the page title I'll just go ahead and say something like build your cess now something like that there we go so we've got our view refresh in here blank page fantastic so the next part of this then would be adding in all of the different elements we want our landing page view to have the very first one is going to be hero.

**11:19:59** · HTML so for that we'll go into flowy go into the blocks marketing UI hero sections and then go ahead and scroll down to the hero section you want to use in this case I'm going to use this one right here we'll show the code I'll go ahead and copy the code paste it in here and then go into main. HTML and then we'll just go ahead and include the landing slh hero.

**11:20:25** · HTML and save that refresh on our homepage cool already looking better now there actually is a button right here we just can't see it so that's because of the actual flow bite classes that are modified in here as you may recall there's one I think primary is the name of it and so we just want to switch out primary like this for blue we'll go

**11:20:50** · ahead and replace all of them save that and refresh and there we go so now we've got basically the same exact color next up what I want to do is go back into my blocks in flowy into marketing UI next up we'll just do our featured sections okay so next one we'll just grab this one right here copy and in our Ling we'll go ahead and say features.

**11:21:11** · HTML paste that in there and then I'll go ahead and back into my main grab this and now do features. htl save that or refresh and what do you know there's our features our homepage is already looking much better granted we would still need to change the actual text in there but

**11:21:33** · I'll leave that for you for another time and so the next part is you know just going back in Forth on what different blocks you might want for your marketing UI right so maybe one of them is going to be our social proof in here we have so much Social proof already for this app uh but this one is maybe something we could do right now so I'm going to go ahead and grab this one we'll look at the HTML we'll go ahead and copy this and I'll go ahead and call this proof.

**11:22:00** · HTML and we'll paste in here okay so what proof do we actually have well we could do our page views so I'll just do page views in here and I'll break this down and this down and we'll go ahead and get rid of these okay so page views this will just be page views like that

**11:22:19** · all right so back into our actual landing page view here I want to copy some of the things from our homepage so let's go back into homepages CF home views and so it's really the about view that we had so let's go ahead and grab uh you know the page view stuff we'll first off import the model and we'll bring this in and then we'll come down and grab our page view query set put this in here and of course we also want to add in this page view object here so

**11:22:50** · that it does get counted as well and then I'll just go ahead and say page view count and set it equal to the qs.

**11:22:58** · count there we go so with this in mind in my features I'll actually or rather the proof we'll go ahead and change this to page view count and we'll go ahead and save that then I'll go ahead and take a look at my project uh let's make sure that we bring in proof on Main so let's go ahead and do that now and proof save it Refresh on our homepage scroll down 59 page views not a lot not a lot

**11:23:24** · but it is something we could not probably not say 59 plus because we don't have that just yet um but of course we can continue to add to this as we see fit the idea also is with this page view you know perhaps you want it to be formatted a little bit differently so the actual count itself perhaps we want to refor format that code and for that I'll go ahead into these helpers here and I'll go ahead and say numbers.

**11:23:50** · pi and I'm just going to go ahead and show you just a simple little function that I created to shorten a number it's very straightforward it's probably could be improved but the idea being then coming back into our landing page here we can do import helpers do numers and then go ahead and say something like our page views and formatted equals to the helpers doers. short number of the qs. count and

**11:24:22** · then we can do that formatted in there and you know while we're at it we can always add a few more we'll go ahead and say like something like social views formatted right uh which is basically the same exact thing but I'll go ahead and do my social view count and we'll paste that in there as well and so now we've got some numbers in here that we can put in our social proof granted I don't think you should fake Social proof but to just kind of have the actual

**11:24:46** · functionality show up we'll go ahead and multiply our page views by 100,000 and then our social views we'll do it by let's say 20,000 which of course well let's do 23,000 so it's a little bit different of a number um but overall we've got basically the same thing going on so now back into my actual social

**11:25:05** · proof section I'm going to go ahead and add in another div here we'll go and paste that and we'll call this what whatever we name it in our view we called it social view count so back in approve social view count and social views and we can just put a plus there as well now put that back save it and we

**11:25:25** · Refresh on our SAS page scroll down a bit there we go so a little bit cooler of a feature as far as what's going on with our social proof and of course now you can just go through and update your blocks as you see fit now one of the things you also might want to have is a call to action so inside of the marketing UI you can see that there's these CTA or call to action sections for

**11:25:48** · people to sign up right and perhaps you want that on your hero image as well um or you just want to bring in some forms and stuff like that so there's definitely a lot more things that you could do with your SAS application the point here isn't so much to build out everything for the landing page but just to have something in here that you might want the last real thing that I want to do though is actually move this image to being my own image so back into the hero

**11:26:13** · uh what we will see is we've got the image in here somewhere there it is right there so this is the image that is currently there that one I'm going to go ahead and save this image as and I want to bring it into my project here so SAS source and then into

**11:26:29** · my static files this time it's going to just be images and then it's going to be our phone mockup I'm going to give flowy this one so it's flowy phone mockup because it's theirs it's not ours maybe it's not even theirs I don't know it's say Samsung so maybe it's not but the idea being we're going to go ahead and then do um you know static in here or rather load static and then down here we

**11:26:53** · should be able to get that relative image which of course will be coming from here we'll go ahead and do static and then the URL itself or the path to it which I'm going to grab the relative path first and then we'll paste this in and then I'll just do images slf flow and then let's go ahead and make sure that that's working sure enough it is here if I inspect the element again it's coming from my static

### Using the SaaS Theme to Fix Missing Tailwind Classes

**11:27:22** · images now we need to fix a slight issue with our CSS as it relates to Tailwind Tailwind itself will build out a CSS file based off of what you are actually using in your project the actual classes that you are using and so this actually presents a little bit of a challenge for our current setup because I want to go ahead and use a new block from flowy if you go in here we got this application UI we go into these application shells

**11:27:51** · the thing about this is I actually want to use one of these shells in here and if I were to copy and paste it as is the styling won't work exactly like we want to in fact we saw this with a few different issues with flow bite itself which was related to the color of the button we already did see that a little bit here and there so the idea from now is you probably want to actually use flow bite the way it's to be used but I

**11:28:15** · already have a course for that and that's this D Jango Tailwind course it will show you how to integrate D Jango and Tailwind directly so that it can actually build the correct Tailwind CSS theme file for your particular project that is something I recommend doing but in our case right now what I'm going to do is I'm not going to go this route the reason I'm not going to go this route has everything to do with the fact of how Tailwind is built it's built with nodejs and so with nodejs you get these

**11:28:43** · package Json here and you build out the file you can watch it while you're doing development you can then build it and have some sort of output file that you would then use in your project so obviously I did this off the video but this brings in node modules and it brings in a bunch of other dependencies for our project that are outside the scope of this course so this also presents an issue when we go into deployment because our Docker file does

**11:29:08** · not have nodejs installed on it nor do we really want nodejs to be installed here so in other words when we actually go into production we run into a whole another issue for this particular theme that definitely can be solved and it's certainly solvable but it's a little bit tricky to get it going so instead I just decided to give the theme to you so if you actually go into the SAS foundations repo you can go into SRC you can navigate down into our static files here into theme into SAS theme domain.

**11:29:36** · CSS and then you can just copy this URL and then go back into our Commando for vendor pole and then come in here we'll go ahead and paste out this theme actual

**11:29:53** · link and then I'll just go ahead and do that right there so this right here will cover you for a short amount of time whereas this Jango course right here this will cover you for a lot longer and it goes through everything you need to do to make sure that you can build your own theme file just like this so with this in mind I can now run the vendor p command so python manage.py vendor pole hit enter this of course is going to bring in that theme file which I can then go into my templates into base into

**11:30:25** · CSS and I can actually bring in my SAS theme. men. CSS instead of flowy just change it to SAS theme save that and what we want to see now is python manage.py run server I just want to verify that that is actually available to us in our project and it's sure enough it is and it should look the same nothing should have changed really at this point um but the main thing that will change is maybe some elements are

**11:30:52** · styled now so maybe these colors are here now where they weren't before that might be something that did change but the other part that will change is the fact that I can now use this application shell which is something that I want to do in the next part mostly so that I can have this side bar and a nav bar on top

**11:31:10** · for my dashboard so let's go ahead and see how that's implemented now of course if you're confused about tailwind and how it all works this will show you the process of configuring it on jeno but Tailwind itself is pretty robust there's a lot to it that is something that we're not going to be covering in this application um but the idea being that our actual project can just copy and paste from flow BTE much better now by using that theme that I just added into the project so let's go ahead and take a look at how we can build our dashboard right

### Dashboard View

**11:31:42** · now now let's go ahead and create our dashboard view so the way we're going to do this is by keeping our Jango project running and then go ahead and navigate into dsrc with python manage.py start app and dashboard and then of course we're going to go ahead and bring in our dashboard View and I'm going to Define this as dashboard and view take in a request and then we'll return render and this of course is going to take in the request and then dashboard main.

**11:32:12** · HTML with an empty context variable here for now and I'll also bring in from Jango contrib doo. decorators we're going to import the login required decorator and there we go so with this

**11:32:29** · dashboard view I actually want to bring it into my landing page view we've already seen something like this before but the idea being that we can actually now from dashboard. viws we're going to import that dashboard view so that we when we actually go to landing page if the request. user. is authenticated then we can return the dashboard view of that request this is

**11:32:53** · not something I recommend doing very often the only reason I'm doing it here is because there's not a really good mechanism inside of our URLs to change between what is authenticated and what's not so realistically this landing page view I should say Landing dashboard page view so that it's both things so that we understand that this is both the landing and dashboard page view in here based off of if the user is

**11:33:21** · authenticated so with this about I'm going to go ahead and bring in that dashboard template now so inside of templates let's go ahead and create this in here and we'll go ahead and run dashboard main. HTML and then I'll go ahead and go into flowy I'm going to just copy this HTML for just a moment

**11:33:39** · we'll save it and then I want to actually render this out in my my project which I am logged in already notice that the flow bite classes aren't working of course they're not so let's go back into landing go into main I'm going to grab the starter of this into our dashboard we'll go to the very top and paste that in and then of course we will put the in Block content at the very end of this all and do something

**11:34:07** · like that if we save that and then refresh in here uh now we're getting closer to what our CSS should look like but it's not quite right and the reason for this has to do with that theme so the theme that you grabbed will look right the theme that I'm working off of does not look right and the reason for that is how Tailwind actually manages

**11:34:29** · the CSS so I paused the video for a second and I went ahead and made changes so can see changes this is what it ends up looking that will be the let me just show you what I mean by the changes can if all the tail stuff

**11:34:49** · yourself here is corresponding to Tailwind now you could have your own custom classes for sure but the ones that are actually Tailwind classes Tailwind is going to look for and then build a CSS file based off of that in other words if I were to come in here and let's go ahead and change a slight change here I'm going to change this class to being red so the background being red and if I refresh in here it does not come out to be red so what I can do then is I can run into my CSS and

**11:35:19** · I can do mpm run and then build this will build a new version of that theme then I can go into my uh git status and I can see that there is a new version of that theme which I can look at then the differences and of course it's actually minified so it's going to be hard to see what the differences are so instead what I'll do is I'll just do get status and get add-- all get commit and I went head and changed the SAS theme and then I'm going

**11:35:49** · to go ahead and push it and then I'll go ahead and run my vendor poll so let's go ahead and CD into SRC python manage.py vendor pole hit enter and then of course with the server still running if I go back into my theme Here I get this little red color or this pinkish color that's coming through because of that change so that slight change has effect

**11:36:12** · on the theme so this is where you might want to learn more about uh you know using Tailwind altogether but in my case I'm going to go ahead and actually continue down this process of building out the theme itself and then committing the theme right so I changed the SAS theme itself or what get add and then change s theme get push and then CD into

**11:36:36** · SRC and then do that vendor poll which is probably what you ended up doing and then that way your actual CSS theme has this sence working already because we are now working based off of the same thing so that's another reason to actually take this D Jango Tailwind course and to learn a lot more about Tailwind this is actually one of the powerful things about Tailwind even though it does take a little bit more to get everything configured and working correctly but here on out we probably won't need to do anything else related to it because we already have the foundation for our dashboard now we just

**11:37:08** · need to decouple it to make sure that it's working correctly in our SAS application now we're going to go ahead and decouple our dashboard elements so that they are a little bit more reusable for us now the first one I'm going to do is jump into the dashboard here I'm going to go ahead and create base. HTML now the reason for this is so that I actually have all of the elements I need and then main. HTML actually goes based off of dashboard and base.

### Dashboard View

**11:37:36** · HTML now this is so that my other than my dashboard elements they can all use bass and that other nav bar and all that which certainly means that it's going to manage a few extra things potentially but that's okay so I'm going to go ahead and bring in my dashboard base put it in like that and there we go so it's basically the exact same thing right now but the things I want to change are going to be right in here so the first one is going to be this nav bar so I'm going to go ahead and collapse that and just cut it out

**11:38:07** · into the dashboard I'll go ahead and do nav HTML once again this is very specific to the nav for the dashboard itself so then inside of main. HTML I'll go ahead and keep in this include tab for a moment and we'll just call it dashboard and main.

**11:38:25** · HTML this of course will be something we want to move but I'm going to leave it in for right now because we want to do the sidebar next which is this this aside so I'll go ahead and cut that out and then I'll come in here and do my sidebar. HTML paste that in and it's going to be basically the same thing so we'll grab this and then do our sidebar.

**11:38:45** · HTML this main class I'll go ahead and break this down and we can see this is the actual element that we want our content to be rendered in so it's going to be in here itself so I now have the basis for what I want in terms of my dashboard itself so go ahead and copy this whole thing uh right here and I'll actually leave out main so I'll copy just the top part for a moment then in base.

**11:39:09** · HTML we'll go ahead and change it slightly and then around block content I'll just close off the div okay so where what do I want in here well it comes back to Main and it's going to be this main block here so I'm going to go ahead and do everything out like that's in the main block I'll break it all down and let's go ahead and break every one of these divs down and so these are the elements I will actually keep in main.

**11:39:33** · HTML and then the rest of them I'll delete except for the main one I'll go ahead and cut that out and then go back into base. HTML and and put my messages as well as my block content into this main. HTML just like that okay so with that saved let's go ahead and refresh on our page here we should basically see the same thing uh but of course maybe there's some issues with it so let's go ahead and change our base.

**11:40:00** · HTML here and then in main. HTML let's make sure that we save everything there as well and then I'll go ahead and refresh in here and we've got a little bit of an issue which is this should say nav HTML not main. HTML so let's go ahead and try that again and refresh it now it's actually looking a little bit better so naturally what we see here are a bunch of features that we're not going to be building in this entire Series right so it sort of makes sense that we're not going to be building all these things but uh the idea being that they

**11:40:31** · are there the components are ready for us to be able to use so the first few components that I want to change is the nav bar so it works a little bit closer to my actual project so let's go into the nav bar and we want to scroll to maybe the very top here and I've got this button here which I'm going to use so that button will be something that's actually very easy to test and that is we can break down our view here and so that's this button that's what's doing that element itself

**11:41:01** · so what I want to break out is maybe I want to get rid of the flow bite logo this is not a flowy project this is a sess application so we want to put our own stuff in there naturally you can put your own image if you want next I want this search bar here to be hidden so I'm going to go ahead and look for it it's the form element here notice that it is hidden when it's small which is actually pretty cool so I can actually come back and there's my form there it's hidden so I can actually get rid of this MD block here uh which would of course hide it so

**11:41:33** · I do that now it's always going to be hidden so the next thing that I want to do is I want to make sure that uh if there are other things related to the search bar that I can also hide that as well so let me go ahead and refresh in here and I'll break it down at some point I see this button here for this search bar so I'll go ahead and inspect this element here and if we look at the

**11:41:55** · elements let me just bring this up a little bit we're inspecting this element here is that button once again I'll inspect it and here is that button right there it's the very first one it says drawer navigation and so this is a really good chance that this is the same as this button right here so I'll go ahead and say that it is hidden notice

**11:42:18** · that it says it's hidden on the large one so if I refresh in here once again hidden so I can do the same concept with each next button right so we can just keep going through it and finding all of the buttons that should be hidden at this point now certainly you are going to want to change this at some point so we've got the drop- down menu we've got our apps button here as well it's nice

**11:42:40** · that all of these things are written here and and they're easily available for us at any time the drop down menus will be hidden until we actually select them with the related button of course the final one is going to be our user menu here which is actually something I want so if I were to refresh on my page

**11:42:58** · I should be able to see that that user menu is in there now this image is not relevant to our user so we want to get rid of that image and what do you know here it is right here I'm just going to go ahead and say hidden for now CU maybe you want to bring it in at some point but but instead what I'll do is I'll bring in the request.

**11:43:17** · user. username and the zeroth element here as in just the H or whatever if we scroll in we can see that it says H in there and it's quite literally the same as what we've seen before so the class itself we might need to change perhaps we add in text white here so we can actually see that element there and then maybe we add in PX of four and then py

**11:43:42** · of two just so that it looks like a little bit thicker of a button and then maybe we get rid of the roundedness of it all uh so it's not quite as you know like an image maybe it's like this or just slightly rounded but those are things that you can play around with with tailwind and of course if you do play around with it too much and things aren rendering then make sure that you're building out your own theme and working based off of that so next thing

**11:44:07** · up now that I've got this user here I can click on it and obviously I've got a bunch of things in here that I just never set up in in our case but of course account setting might be something I can actually do so let's go ahead and start off with this right here I'm going to change it from the users first name to just request. user.

**11:44:24** · username and then maybe our email in there as well if that is something you want to put in next up uh we're going to go ahead and just hide out my profile that's not something I have just yet this one right here we'll call this billing settings or something like that this hre should go into our billing so if I go into URLs for our billing stuff let's go ahead and do account billing there it is right there for our user subscription so let's go ahead and add that one in and URL of that user

**11:44:56** · subscription save that refresh it here now I can go to building settings there we go pretty good next up maybe we want to add in one for pricing so let's go ahead and do that I'll just call it

**11:45:11** · pricing or membership pricing or something along those lines what's the URL for it and did we give it a name we did which is just simply pricing so back into that template we are going to change that one to pricing we're refresh in here pricing makes sense then the building settings this should be in the dashboard itself so let's go ahead and change that while we're at it so into our billing settings

**11:45:41** · which would be in subscriptions and then user detail view this should be dashboard base now save that refresh there we go that looks so much better now the button classes we don't actually have any on there so maybe we want to look that up I'll let you do that at this point cancel membership this probably could stay as this same SAS application itself okay so something

**11:46:07** · else to think about great so now we've got building settings in there we've got our pricing the next thing is probably likes collection all this stuff we don't need and then our sign out so back into nav um we're going to go into this UL class here and I'll just go ahead and say it's hidden we don't need this so it's something like not in

**11:46:30** · use to come back at some point maybe then of course our sign out which is going to be the same as what we have on our other nav bar so let's go ahead and grab whatever that is which of course is this URL right here here and I'll bring that in I didn't call it sign out there I called it log out I believe so Navar yep so let's keep consistent with that great now I can go into log out

**11:46:56** · naturally the downside of where this current thing is is we've got these other buttons that we may or may not want to use and so what I actually want in my main nav bar is if the user is authenticated we want to add in one other element which is the dashboard itself so I'll go ahead and grab this and right next to log out perhaps we put in dashboard which is just simply going

**11:47:20** · home right so that's what it's going to do so we refresh there's our dashboard now and I can go back to where that is so that whenever I need to I can come in and so the other thing is maybe I also don't want contact and pricing on there unless I'm actually not logged in so I'm going to go ahead and move all of those things to just the logged out user so

**11:47:43** · once again refresh here go to log out there we go that looks a little bit better we click on dashboard and now we've got some of the navigation going uh pretty well so of course the next thing would be to do everything with the sidebar but I'm going to leave that to you you're going to go ahead and play around with it as you see fit and of course I'm leaving out a bunch of things because this is a SAS Foundation of course so that you have everything in place as much as possible without going

**11:48:10** · into all the little little nitty features that you might want for your project but now that we've got these things decoupled and with some of the navigation in place we have a much better ability to start using out our project here uh there's one thing that I do want to change which is the first URL on my nav bar here let's go ahead and

**11:48:32** · make sure that that takes us to our homepage as well and so there we go we click on that and if I log out I can log out and sure enough there's our sass there's there's all that stuff we go ahead and log back in again and there's our saus application and our actual Navar and all that pretty cool um so

**11:48:51** · that is going to be our decoupled dashboard now is a good time to take some time on how you want to think about all of these different elements in your application authentication this is something I would probably remove from the sidebar altogether messages are you really going to handle messages in your application maybe uh but the point here is we have the foundational dashboard in place which is pretty

### Thank you and next steps

**11:49:16** · nice thanks so much for watching hopefully you got a lot out of this going forward what we want to do is continue to improve this SAS application this is meant to be a foundation that we can build off of and create a lot more courses around so you can see well basically have something with billing already in place with user permissions already in place so that we can see where we can take it from here that might mean improving the front end and changing it out for something like next or react or just using something as effective and Powerful as HTM X the goal

**11:49:48** · here is to have something that we can build off of to build an actual functioning s application where we can start charging users building out customers and launching that startup you've been dreaming about so if you have ideas for what we should be building on top of this please let me know in the description because there's just so many different ways on how we can take it and of course that is something I want to do so be sure to follow along at my YouTube channel on CF c. shyyoutube or of course on my website on cf.

**11:50:17** · shoures thanks again for watching my name is Justin Mitchell look forward to seeing you in the next one \[Music\]