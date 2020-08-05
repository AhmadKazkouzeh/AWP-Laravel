<h1 style="text-align:center">AWP Collaborative Project Management</h1>
<hr />

## Preview
<img src="https://github.com/advanced-web/awp-2-AhmadKazkouzeh/raw/master/preview.png">

## 📝 Table of Contents
- [About](#about)
- [Installation](#install)
- [Technologies](#technologies)



<a name = "about"></a>


#### What is AWP project management software?

It's an open source project management tool to help you plan, organise, and manage your team's work. You can coordinate team projects and tasks so everyone knows who's doing what. Updates status of each individual project or task.

#### Why do you need AWP?

Managing projects and tasks within a team is hard work. Even harder if you don't use online software. It's easy to lose track of all the projects and tasks to stay up to date. Use AWP tool to organise projects, tasks and make communication easy for the team.

## AWP Benefits

#### Easy
Get started in minutes.
####  See More, Manage More
With anytime, anywhere access and real-time dashboards, AWP enables you to stay up to date on status and ensure no detail is missed.
####  Deliver Work at Scale
Whether managing projects for product development, IT projects or marketing, AWP scales to fit the needs across all industries.
####  Accessibility
AWP give all users the best experience possible regardless of limitations or disabilities.
#### Secure
AWP is fully secure for users.

## How Does AWP Work
Users will able to register and login to AWP. Then view current projects and tasks belong to each project. 
Users will be able to create, edit, show and delete any selected project, as well as the ability to search by project name and filtering through the projects by status (Started or Completed), start and end date. users will be able to mark project as Completed or Uncompleted and finally view tasks belongs to the project. 
Users will be able to create, edit, show and delete any selected task, as well as the ability to filter the tasks through by title, status (Started or Completed), start and end date.

<a name="install"></a>
## 🏁 Installation 

## Get Started
### Install docker, docker-compose
```bash
apt install docker docker-compose
```
### Enable and start docker
```bash
systemctl enable docker
```

```bash
systemctl start docker
```

### Clone repo and change directory
```bash
git clone https://github.com/AhmadKazkouzeh/AWP-Laravel
```

```bash
cd awp
```
### Build AWP laravel docker image
```bash
docker build -t awp:laravel .
```
### Run Containers
```bash
docker-compose up -d
```

<h3 style="text-align:center;">Go to http://localhost</h3>

<a name = "technologies"></a>
## Technologies
- Laravel 5.8
- JavaScript
- jQuery
  

