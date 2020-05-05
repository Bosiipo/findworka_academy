<h1>Findworka Academy</h1>

##Findworka Academy is a capstone project built as an online learning platform

<ul>
    <li>Creation of assignments by tutor</li>
    <li>Submission of assignments by students and real time grading by tutors.</li>
    <li>Installmental payment of tution fee by students and if a student does not pay, they get locked out of their account until they          pay!</li>
    <li>Curriculum download by students.</li>
    <li>Helpful resources up for download by students.</li>
    <li>Tutor can set deadline for the assignment given and if student doesn't submit before the deadline, the opportunity for submission       is closed</li>
</ul>

<h1>Installation</h1>

<ul>
    git clone https://github.com/samson1998/fw-project.git

    cd file

    composer install

    cp .env.example .env

    php artisan key:generate

    php -S 127.0.0.1:8080 -t public/
</ul>
