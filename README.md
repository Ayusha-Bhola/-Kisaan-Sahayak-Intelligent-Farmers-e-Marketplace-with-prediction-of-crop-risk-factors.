# Kisaan-Sahayak-Intelligent-Farmers-E-Marketplace-with-Prediction-of-Crop-Risk-Factor


![pic1](https://user-images.githubusercontent.com/62464857/126490311-da935a79-9060-4403-9ebd-8a7fd4121c3a.png)


India is a huge Agricultural Hub and more than 50% of the Indian workforce is involved in agriculture. Thus, considering this a proposed system named “Kisaan Sahayak” : Intelligent Farmers e-Marketplace with prediction of crop risk factors.
It is a smart approach which implements the following features.
• It provides an E-Marketing platform which will reduce the role of middlemen who are hindering the trading sector in agriculture.
menus to sell their products and buyers can buy the products from this portal and they can easily pay to farmers using third party payment gateway which is friendly to use This reduces the involvement of retailer.
Leaf disease detection is the most useful feature for farmers as they worried about their crop diseases, by simply taking the image of crop, we provide the information of disease and solution for it. Accordingly farmer can cure the disease of crop.


Dataset source:
[visit website](https://drive.google.com/drive/folders/1vdr9CC9ChYVW2iXp6PlfyMOGD-4Um1ue)


---
# Dependencies-and-Requirements:

 Libraries used:
 
 
 flask 1.1.2:
 
Flask is a lightweight WGSI(Web Server Gateway Interface) web application framework. It began as a simple wrapper around werkzeug and jinja and has become one of the most popular Python web application frameworks

License: BSD-3-Clause


numpy 1.18.5:

A fundamental package for array computing in python

License: OSI Approved (BSD)



scikit-learn 0.22.1:

Scikit-learn is a free software machine learning library for python programming.

License: BSD 3-Clause



keras 2.4.3:

Keras is an API designed for human beings, not machines. Keras follows best practices for reducing cognitive load: it offers consistent & simple APIs, it minimizes the number of user actions required for common use cases, and it provides clear & actionable error messages. It also has extensive documentation and developer guides.

License: MIT


TensorFlow 2.1.0:

TensorFlow is an open-source machine learning framework for everyone.

License: Apache 2.0



PHP 3.01:

PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.

License:2.0



MySQL:

MySQL is an open-source relational database management system.

License:MySQL 8.0


Firebase:

Easy sign-in with any platform

Firebase Authentication aims to make building secure authentication systems easy, while improving the sign-in and onboarding experience for end users. It provides an end-to-end identity solution, supporting email and password accounts, phone auth, and Google, Twitter, Facebook, and GitHub login, and more.




---

## Tools
1.IDE: Used Jupyter NoteBook (Google Colab) for model training. used spyder for model deployment on the local system. To use Jupyter NoteBook and Spyder.

2.Testing: 

3.Analysis:



### System Environment :

Processor: 2.5 gigahertz (GHz) or faster processor.

RAM: 8 GB or more

Hard drive space: 48 GB for 64-bit OS or Higher


Operating System:Higher Windows 10


GPU: NVIDIA GTX 1050(4 GB) Compute Capability 3.5 or higher.


Language: Python 3.6.


Tool: Anaconda 3-5.2.0-Linux. Anaconda3-5.2.0-Windows-x86_64. Xampp v3.2.4


Internet Connection: Internet connectivity is necessary to download some Libraries. Internet connection required during the training of the ML model.


---

# Intructions for Deployment
For E-marketplace portal for farmers

Step 1: Download/clone the repository .

Step 2: Download and install xampp 8.0.9 / PHP 8.0.9 .

Step 3: Activate xampp,start apache and MYSQL.

Step 4: Now click on the "Admin" button corresponding to the MySQL module. This automatically redirects the user to a web browser to the following address-

http://localhost/phpmyadmin

Step 5: Create Database in MYSQL with name "shopping".

Step 6: Import "shopping.sql" file 

Step 7: Copy shopping folder to xampp/htdocs folder.

Step 8: Start XAMPP server and Go to the browser and type localhost://shopping//home.php

For Plant disease detection system


Step 1: Download and install Python 3.6.

Step 2: Download and install Spyder.

Step 3: Create a virtual environment and activate virtual.
        
Step 4: Open Spyder and create a new project then create folders and files according to below hierarchy of the project.

![1](https://user-images.githubusercontent.com/62464857/122721112-e5a5c480-d28d-11eb-823d-8d4e9fe9d826.png)

Step 5: Create a virtual environment and activate virtual.

Step 6: Install above packages using below command in anaconda prompt

pip install tensorflow==2.2.0

pip install Keras==2.4.3

pip install numpy==1.18.5

pip install flask==1.1.2

pip install pillow

pip install --upgrade IPython


Step 9:  Run app.py to start flask server.

Step 10: : Start XAMPP server and Go to the browser and paste the url http://127.0.0.1:5000/

![Capture](https://user-images.githubusercontent.com/54286037/128539603-4c9ce8ac-5bc5-4233-8226-2f4412d6c0b0.PNG)
![Capture1](https://user-images.githubusercontent.com/54286037/128539641-46338ecb-785e-4b29-a0d9-dcf996d99b1d.PNG)

Tally Trade Off Screenshots 

![image](https://user-images.githubusercontent.com/59277684/186890194-54216e53-6151-4d45-aec0-b7511d4f861a.png)
![image](https://user-images.githubusercontent.com/59277684/186890386-6584ae7b-d508-431e-aed1-7fed09e4b0f5.png)
![image](https://user-images.githubusercontent.com/59277684/186890426-314d4bca-6890-4568-bfdf-ad6599ad738e.png)
![image](https://user-images.githubusercontent.com/59277684/186890486-07457197-7713-43b5-b3f4-39ead632fe73.png)
![image](https://user-images.githubusercontent.com/59277684/186890519-632adbc0-eb0d-4dfe-af1a-9e5edf3aaf61.png)
![image](https://user-images.githubusercontent.com/59277684/186890539-3c864376-8aba-4778-bd97-b2c9758fcdef.png)
![image](https://user-images.githubusercontent.com/59277684/186890888-3c2e8e31-26ac-4737-9f32-7b92587ae0f9.png)


Tally Trade off Video Demonstration.
https://drive.google.com/file/d/1RzjIbemwaea8mIMBPV61e_bUfUTw81YQ/view?usp=drivesdk



















