# WordPress shortcode boilerplate

## Intent:
My goal is to simply store my code snippets. I added them quickly and haven't even checked for typos. Use at your own risk.

## Requirements:
The final shortcode boilerplate is for folks who have set up an autoloader.

## What the hell are exposed functions and working classes?

We used those terms to differentiate between the 2 shortcode functions when we used an autoloader. The "exposed function" is defined within the included code. That gives WordPress a function to use when registering the shortcode.

### What's the benefit of using an autoloader in this case?

If you're using it in this single instance, there isn't much advantage. But the consistent use of autoloaded classes may improve performance a bit.
