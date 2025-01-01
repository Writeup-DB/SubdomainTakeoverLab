![SubdomainTakeoverLab](img/Subdomain.png)

# SubdomainTakeoverLab
Subdomain takeover vulnerabilities occur when a subdomain (subdomain.example.com) is pointing to a service (e.g. Amazone S3, GitHub pages, Heroku, etc.) that has been removed or deleted. This allows an attacker to set up a page on the service that was being used and point their page to that subdomain. For example, if subdomain.example.com was pointing to a GitHub page and the user decided to delete their GitHub page, an attacker can now create a GitHub page, add a CNAME file containing subdomain.example.com, and claim subdomain.example.com.


## Who we are ? (WriteupDB)
Writeup-DB aims to foster a community of continuous learning and knowledge sharing. By centralizing these writeups, we simplify the process of accessing educational content and empower individuals to expand their horizons. Dive into the world of writeups at Writeup-DB, and let the pursuit of knowledge lead you to new heights.

## Lab Details
Subdomain Takeover lab is FREE for everyone. This means here is a legal to takeover Subdomain of this website not my Personal Domain. hehe ;) Here you'll find more than 70 subdomain which is waiting for TAKEOVER :wink:


## How To Play
- Find Your Target Subdomain.
- Claim Your Subdomain and Generate Unique Value. This will use as a filename in further step.
- Once You Takeover the subdomain. Make a txt file with previous generated value as a Filename and file content must be your E-Mail only.
- **Command Example:** 
```sh
echo "info@writeup-db.com" > d1282ee66b41e66645be96937b3d6a03.txt
```
- Host this file d1282ee66b41e66645be96937b3d6a03.txt on root of subdomain.
- Let's Verify your Sudomain. 
- **Done!!**.


## List Of Vulnerable Services
- AWS/S3.
- Github Page
- Heroku
- Tumblr
- Tilda and etc.


## Author 
- **[Touhid M.Shaikh](https://twitter.com/touhidshaikh22)** - Project Started

See also the list of **[contributors](https://github.com/Initd-sh/SubdomainTakeoverLab/graphs/contributors)** who participated in this project.


## Bugs Reports
If You Find any Bugs, Errors and Misconfiguration.
**Please report on  via Inssues.**


## License
This project is licensed under the Mozilla Public License 2.0 License - see the [LICENSE.md](https://github.com/Initd-sh/SubdomainTakeoverLab/blob/master/LICENSE) file for details


## Thank You Guys!
[Shrutirupa](https://twitter.com/freak_crypt), [Hina](https://twitter.com/hina_rawal), [Sachin], [Sagar]
