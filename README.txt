riadscircle Communication — Static Upgraded Version
--------------------------------------------------

What you selected:
- Pure HTML static version (Render static hosting compatible)
- Fully upgraded UI: preloader, animations (AOS), dark mode toggle, improved SEO meta tags,
  mobile menu, accessible focus outlines, and a contact form pre-wired for Formspree.

Files:
- index.html : Main website (static, no PHP)
- README.txt  : This file
- robots.txt  : simple robots rules

How to host on Render (Static Site):
1. Create a GitHub repo and push these files.
2. Go to https://render.com, sign in, choose "Static Site" and connect the repo.
3. Build command: (leave empty)
   Publish directory: /
4. Deploy. Your site will be available at https://<your-name>.onrender.com

Contact form:
- The form action in index.html uses Formspree placeholder:
  action="https://formspree.io/f/your-form-id"
- To make the contact form work:
  Option A: Sign up at Formspree (https://formspree.io), create a form endpoint, and replace the action URL.
  Option B: Use Netlify Forms and host on Netlify, or integrate a serverless function to send emails.

Need changes?
- Want a custom logo, real images, or me to wire Formspree and set up the GitHub repo? Reply and I’ll do it.
