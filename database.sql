CREATE TABLE Information (
  id integer not null primary key,
  name varchar(50) not null,
  value varchar(250) not null
);

INSERT INTO Information
  (id,name,value)
  values
  (1,'Address','344000, г. Ростов-на-Дону, ул. Московская, д. 63'),
  (2,'Phone','+7-952-580-98-89'),
  (3,'Email','lazarevdmitry2008@gmail.com'),
  (4,'Fax','+7-952-580-98-89'),
  (5,'Year','2018'),
  (6,'DesignedBy','robirurk'),
  (7,'ImplementedBy','Dmitry Lazarev'),
  (8,'OwnerNameBrief','Piroll'),
  (9,'OwnerNameFull','Piroll Design, Inc.');

CREATE TABLE Projects
(
  id integer not null primary key,
  name varchar(50) not null,
  image varchar(250) not null,
  header varchar(250) not null,
  content text not null,
  clientName varchar(250) not null,
  clientDate datetime not null,
  share varchar(200) not null
);

INSERT INTO Projects
  (id,name,image,header,content,clientName,clientDate,share)
  values

  (
    1,
    'Project #1',
    'project1.png',
    'Project #1',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    2,
    'Project #2',
    'project2.png',
    'Project #2',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    3,
    'Project #3',
    'project1.png',
    'Project #3',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    4,
    'Project #4',
    'project4.png',
    'Project #4',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    5,
    'Project #5',
    'project5.png',
    'Project #5',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    6,
    'Project #6',
    'project6.png',
    'Project #6',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    7,
    'Project #7',
    'project7.png',
    'Project #7',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    8,
    'Project #8',
    'project8.png',
    'Project #8',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    9,
    'Project #9',
    'project9.png',
    'Project #9',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    10,
    'Project #10',
    'project10.png',
    'Project #10',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    11,
    'Project #11',
    'project11.png',
    'Project #11',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  ),
  (
    12,
    'Project #12',
    'project12.png',
    'Project #12',
    "<p>Light his can't a creeping. Be, being blessed night. Replenish blessed creature good. Saw earth every creepeth lights day, divided abundantly form. In. Said given lights. Sixth the male. Upon their multiply. Kind beast. Him tree upon.</p><p>Cattle. Dominion day herb she'd creeping divide darkness. Which. Subdue had.</p>",
    "Emma Morris",
    "2017-06-25",
    "Facebook, Twitter, Pinterest"
  );

INSERT INTO Information
  (id,name,value)
  VALUES
  (10,'NameHeader','Amelia Woods'),
  (11,'NameSubheader','I am a Graphic & Web Designer based in New York, specializing in User Interface Design and Development.'),
(12,'ProjectsAmount','548'),
(13,'WorkingHoursAmount','1465'),
(14,'PositiveFeedbacksAmount','612'),
(15,'HappyClientsAmount','735');

CREATE TABLE Submissions
(
  name varchar(250) not null,
  email varchar(250) not null,
  title varchar(250) not null,
  message text not null,
  date datetime not null
);

CREATE TABLE Users
(
  name varchar(100) not null,
  password varchar(100) not null,
  expires datetime not null
);

INSERT INTO Users
(name,password,expires)
values
("test","test","01-01-2019 00:00");
