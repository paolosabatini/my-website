# Repository for my web-site

This repostiory contains only the php/html that I edited. The style etc.. is based on an existing theme

## How to get the missing stuff
Download from [Greyscale theme](https://startbootstrap.com/theme/grayscale) and unzip.
Copy over the folders:
 - assets
 - css
 - js


## How to test locally
At the moment testing is based on [XAMPP](http://www.csc.villanova.edu/~mdamian/PHP/macxampp.htm). The local folder in `/Applications/XAMPP/htdocs` is only a symlink to the git repository.

To start/stop the services, there are two scripts:
 - *./xamppstart*: it starts with sudo permissions all the services needed by xampp (also MySql).
 - *./xamppstop*: it stops them.