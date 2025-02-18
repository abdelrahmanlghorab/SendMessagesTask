# Laravel Task: Send Messages to 10,000 Users

## 📌 Task Description
**Question:**  
What is the best way to send a message to 10,000 users efficiently without affecting server performance?  

**Answer:**  
The best approach is to use **Laravel Queues** to process the messages in the background instead of sending them all at once. This prevents the server from slowing down or timing out.

---

## ⚙️ How the Task is Implemented
- **Queues:** I used Laravel's `queue:work` system to process messages asynchronously.  
- **Jobs:** Created a job `SendMessageJob.php` to handle each message.  
- **Database Queues:** Used MySQL as the queue driver for easy tracking.  
- **Queue Worker:** Runs in the background to process jobs one by one.  
- **Testing:** Messages can be monitored using `php artisan queue:work` or the `jobs` table.  

---

## 🚀 How to Run and Test the Task  

### **1️⃣ Clone the Project**
```bash
git clone [YOUR_GITHUB_REPO_LINK].git
cd project-folder
