# 🛡️ Click.Trick.Root : A Cybersecurity Lab by Mansi Gharat

This is a vulnerable lab designed as part of the **NullClass Cybersecurity Internship**. It simulates common web-based attacks and misconfigurations found in real-world offensive security scenarios.

---

## 🔍 Features

- ✅ CSRF (Cross-Site Request Forgery)
- ✅ SSRF (Server-Side Request Forgery)
- ✅ SMB Enumeration & Exploitation
- ✅ Privilege Escalation via SUID bash
- ✅ Session-based Logic Flaws

---

## 🧰 Tech Stack

- **Web App**: PHP + MySQL
- **Environment**: Linux VMs (Ubuntu & Kali via VirtualBox)
- **Tools Used**:
  - Burp Suite
  - Nmap
  - Metasploit
  - Wireshark
  - CIS-CAT

---

## 📁 Files Included

- ✅ Vulnerable Website Source Code
- ✅ Virtual Machine (VM) [Download Here](https://drive.google.com/file/d/10VCSkxFXg0kCwLLSejvuUoCgKWeMWYnU/view)
- ✅ Detailed Report with Walkthroughc (PDF)[Download Here](https://drive.google.com/file/d/1KUviOkBeVsDqXGFpsOwpNG1jYD_Ghzts/view?usp=sharing)

---

## 🛠️ Setup Instructions

1. Import the **vulnerable VM (Ubuntu)** in VirtualBox.
2. Set up your attacker VM (Kali) or use your own Linux box.
3. Start Apache and MySQL services on the target machine.
4. Open the target's login page from the attacker.
5. Launch the CSRF attack from a malicious hosted page on the attacker.

---

## 🎯 Flag Paths

- 🏁 **CSRF Flag** – Captured after abusing the CSRF token
- 🏁 **SSRF Flag** – Captured after internal request via SSRF
- 🏁 **Root Flag** – Captured post privilege escalation to root

---

## 📌 Credits

Developed by **Mansi Gharat**  
Cybersecurity Internship @ NullClass
