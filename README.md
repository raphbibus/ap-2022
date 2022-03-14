# agile punks - the website

What's a great recipe for a website? We don't know. Our website is in PHP.


We have Laravel, we have Livewire, we have TailwindCSS. And for some reason (only PHP devs would understand) as few JavaScript as possible. 


If you want to play around with our website or steal it or do whatever to it, just checkout the repository. It runs smoothly in Docker with Laravel Sail. You might have to install your composer dependencies first, though. 
I don't know. I just copy&paste terminal commands until everything works. 


You might ask why our website is no super-slow, stinky Wordpress page. Well, because we love our mental health and performance. 
And we probably hate plugin updates.


You might also ask why we don't track people and double-check the code to make sure we don't lie to anybody. 
We don't want to track you. If you want to work with us just get in touch with us like normal people would do.
We don't track you because we don't want to send you annoying cold call linkedin messages. 
We don't track you because we believe in privacy. 
And we're f*cking lazy. Why should we check GA or something on a daily basis to see like 10 users (8 of them bots). 


What else? Nothing. 


Want to see this page in action? Fine. Here's the [Link](https://agile-punks.com).

```
location ~* \.(js|css)$ {
        expires 3d;
        add_header Cache-Control "public, no-transform";
    }
    location ~* \.(png|jpg|jpeg|gif|ico|mp4|woff|woff2|webp)$ {
        expires 547d;
        add_header Cache-Control "public, no-transform";
    }
```
