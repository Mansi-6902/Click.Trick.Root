# 🛡️ Click.Trick.Root : A Cybersecurity Lab by Mansi Gharat

This is a vulnerable lab designed as part of the NullClass Cybersecurity Internship. It simulates common web-based attacks and misconfigurations used in real-world offensive security.

## 🔍 Features

- ✅ CSRF (Cross-Site Request Forgery)
- ✅ SSRF (Server-site Request Forgery)
- ✅ SMB Enumeration & Exploitation
- ✅ Privilege Escalation via SUID bash
- ✅ Session-based logic flaws

## 🧰 Tech Stack

- PHP + MySQL Web App
- Linux VMs (Ubuntu & Kali on VirtualBox)
- Tools Used: Burp Suite, Nmap, Metasploit, Wireshark, CIS-CAT

## 📁 Files Included
- Vulnerable Website Source Code
- VM link
- Detailed report containing walkthrough

## 🏁 Setup Instructions

1. Import the vulnerable VM (Ubuntu) and setup attacker VM (Kali) or use your own machine
2. Start Apache and MySQL on the target
3. Browse the login page on the attacker
4. Launch the CSRF payload from attacker’s hosted page

## 🎯 Flag Path

- CSRF flag – After CSRF token abuse
- SSRF flag - After SSRF successful internal server request 
- Root flag – After privilege escalation

---

Created by **Mansi Gharat**  
🔗 [LinkedIn](https://linkedin.com/in/mansi-gharat-79250b28a) | ✉️ manasvigharat455@gmail.com
🔗 [VM](https://drive.google.com/file/d/10VCSkxFXg0kCwLLSejvuUoCgKWeMWYnU/view)
