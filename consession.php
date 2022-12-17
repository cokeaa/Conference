<?php 
    $title = 'Sessions';
    require_once 'includes/header.php';
   require_once 'db/conn.php';
    $results = $crud->getSession();
?>

<h1 class="text-center">Session Types </h1>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-10 py-5">
              
                <p class="lead">Choose from a variety of session formats to fit each type of learning style. Whether you favor condensed,
                     rapid-fire sessions; you can’t wait to hear from thought leaders on the main stage; or are eager to roll up your sleeves for hands-on learning, 
                     there are different session formats to fit your learning style.</p>
</br>
<ul>
<li>
<img src="uploads\Pic Session -General.jpg" class="img-center pb-3">
<h4 class="text-left">GENERAL SESSIONS</h4>
<p>Discuss how leveling up your skills in this ever-changing world is not just good for your professional development,
     but your organization at large. It is imperative that you stay up to date on the current workplace issues, 
     compliance requirements and the latest technologies in order the cause the effect you want to see in your work and your workplace.</p>
     </li>
     <li>
     <img src="uploads\Pic Session-Concurrent.jpg" class="img-center pb-3">
<h4 class="text-left">CONCURRENT SESSIONS</h4>
<p>Provide concrete examples of how your experience will positively impact your day-to-day work. With nearly 200 education sessions,
     you can select sessions that are most beneficial to you, your team and organization. Let your boss know your custom curriculum will help solve workplace challenges. 
     We have a large number of topics from speakers who are trusted and recognized for their expertise.</p>
     </li>
     <li>
     <img src="uploads\pic session mega.jpg"class="img-center pb-3">
<h4 class="text-left">MEGA SESSIONS</h4>
<p>Flag the contacts you will make at G-Conference to advance your organization’s goals. With potentially more than 25,000 attendees in person and live online, 
    there are countless ways to establish connections with industry professionals and solution partners. The G–Conference Annual Conference & Expo will host 500+ solution 
    providers showcasing a wide range of innovative products and services to help meet your needs. You can benchmark and strategize with your peers to bring proven tactics 
    and innovative thinking back to your office.</p>
     </li>
     <li>
     <img src="uploads\pic session smart.jpg" class="img-center pb-3">
<h4 class="text-left">SMART STAGE PRESENTATIONS</h4>
<p>Let your boss know you are committed to finding cost-savings. For example, you can register early before rates increase.
     You can take full advantage of coffee breaks, receptions and lunches to help cut costs of dining out, too. 
     If attending virtually, you’re automatically saving with no travel costs!</p>
     </li>
    <li>
<<img src="uploads\pic session  preconference.jpg" class="img-center pb-3">
<h4 class="text-left">PRE-CONFERENCE LEARNING</h4>
<p>Put your business case in writing. Consider committing to a post-conference briefing for staff, senior management or your team, 
    where you’ll highlight what you’ve learned from the conference. Tie your learnings to your organization’s long-term and short-term goals 
    or strategic plan to demonstrate the value and impact of your education.</p>
     </li>
</ul>
      </br>
</br>
</div>
<?php require_once 'includes/footer.php';
 ?>