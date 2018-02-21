# Project 2
+ By: Elijah Reddy
+ Production URL: <https://p2.mystphy.sx>

## Outside resources
+ PHP logic and reference via [PHP Manual](https://secure.php.net/manual/en/)
+ Styling via [Bootstrap CDN](https://www.bootstrapcdn.com)
+ HTML Layout reference via [Bootstrap Documentation](https://getbootstrap.com/docs/4.0/getting-started/introduction/)
+ Forms reference via [W3 HTML Input Types](https://www.w3schools.com/html/html_form_input_types.asp) and [input type="date"](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/date)
+ Leap Year Algorithm via [Leap year](https://en.wikipedia.org/wiki/Leap_year)
+ Floating Point Division pointers via [How do I get a float value when dividing two integers? (PHP)](https://stackoverflow.com/questions/17218312/how-do-i-get-a-float-value-when-dividing-two-integers-php)

## Code style divergences
+ My code is longer than 80 characters in a few places.

## To Do
- [x] Come up with an idea
- [x] Wireframe forms
- [x] Implement PHP functions in logic
- [x] Implement styling

## Notes for instructor
+ Due to PHP on Windows not supporting 64 bit integers I had to use floats to keep my date range high.
+ Boostrap guidelines require a lot of divs for everything. Is this alright or should I try to avoid this as mentioned in your best practices even though I'm using Boostrap?
+ Remembering radio button selection turned out to be a whole mess which did not sit right with me. I would prefer all my site users to always use the combined value anyway so I hope it's fine that I did not implement it.
+ I had to install bcmath separately on my DigitalOcean droplet: https://askubuntu.com/questions/776232/how-do-i-enable-the-bcdiv-function-in-php-7-0/776233
+ The W3 Validator throws a warning regarding my use of the date type field as IE 11 and below do not support it. In order to support those browsers Mozilla (link above) recommends I use the 'pattern' attribute which will only come into effect when IE 11> fall back to a text field. However, W3 throws an error regarding this stating that it is not valid for the date input even though the text input fall back is what I was aiming for anyway. I have chosen to keep the pattern attribute in as Mozilla suggests.
