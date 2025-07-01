<?php require "common/header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AICTE || Guru Nanak College Dehradun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .toggle-btn {
      background-color: #002b5c;
      color: white;
      border: none;
      padding: 10px 20px;
      margin: 0 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s;
    }

    .toggle-btn:hover {
      background-color:rgb(138, 163, 227);
    }

    .active-btn {
      background-color:rgb(224, 74, 74) !important;
    }

    .table td, .table th {
      vertical-align: middle;
      text-align:left
    }

    #pdfModal {
      display: none;
      margin-top: 30px;
    }
  </style>
</head>

<body>

<!-- 🚫 Do not touch heroBanner -->
<section class="heroBanner">
  <div id="myCarousel" class="carousel slide h-100" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="upload/infra/AICTE.jpg" class="d-block w-100 img-fluid" alt="Slide 1" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ✅ AICTE Document Section -->
<section class="aicte-documents container mt-5">
  <div class="text-center mb-4">
    <button class="toggle-btn" data-target="mandatory">Mandatory Disclosures</button>
    <button class="toggle-btn" data-target="desirable">Desirable - AICTE</button>
    <button class="toggle-btn" data-target="essential">Essential - AICTE</button>
  </div>

  <!-- ✅ Mandatory -->
  <div id="mandatory" class="doc-table">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S. No.</th>
          <th>File Name</th>
          <th>PDF Link</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Letter of Approval (L.O.A.) (2024-25)</td>
          <td><a href="upload/infra/Letter-of-Approval-(2024-2025).pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Extension of Approval (E.O.A.) 1. 2025-26</td>
          <td><a href="upload/infra/EOA-Report-(2025-2026).PDF#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- ✅ Desirable -->
  <div id="desirable" class="doc-table" style="display:none;">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S. No.</th>
          <th>File Name</th>
          <th>PDF Link</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Implementation of Student Induction Programme          </td>
          <td><a href="upload/aicte/aicte-1/1. Implementation of Student Induction Programme.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Implementation of Examination Reforms          </td>
          <td><a href="upload/aicte/aicte-1/2. Implementation of Examination Reforms.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Provision to watch MOOCS Courses through Swayam          </td>
          <td><a href="upload/aicte/aicte-1/3. Provision to watch MOOCS Courses through Swayam.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Applied for Membership of National Digital Library          </td>
          <td><a href="upload/aicte/aicte-1/4. Applied for Membership of National Digital Library.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>5</td>
          <td>Implementation of the Schemes Announced by Government of India          </td>
          <td><a href="upload/aicte/aicte-1/5. Implementation of the Schemes Announced by Government of India.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>6</td>
          <td>Offering of Skill Development Courses Approved by the Council          </td>
          <td><a href="upload/aicte/aicte-1/6. Offering of Skill Development Courses Approved by the Council.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>7</td>
          <td>Fabrication Facility Laboratory(FABLAB) Tinkering Laboratory/Innovation Laboratory          </td>
          <td><a href="upload/aicte/aicte-1/7. Fabrication Facility Laboratory(FABLAB) Tinkering LaboratoryInnovation Laboratory.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>8</td>
          <td>Installation of Grid Connected Solar Rooftops/Power Systems          </td>
          <td><a href="upload/aicte/aicte-1/8. Installation of Grid Connected Solar RooftopsPower Systems.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>9</td>
          <td>Public Announcement System          </td>
          <td><a href="upload/aicte/aicte-1/9. Public Announcement System.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>10</td>
          <td>ERP Software          </td>
          <td><a href="upload/aicte/aicte-1/10. ERP Software.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>11</td>
          <td>Efforts to encourage Final Year Students to appear GATE examination          </td>
          <td><a href="upload/aicte/aicte-1/11. Efforts to encourage Final Year Students to appear GATE examination.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr><tr>
          <td>12</td>
          <td>Efforts to encourage students to participate in National/International competition like SIH, IDEATHON, etc              </td>
          <td><a href="upload/aicte/aicte-1/12. Efforts to encourage students to participate in NationalInternational competition like.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>13</td>
          <td>Efforts to encourage students to take-up internship and project work in Indian Knowledge System related Areas/Topics/Disaster Management          </td>
          <td><a href="upload/aicte/aicte-1/13. Efforts to encourage students to take-up internship and p.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>14</td>
          <td>Transport Facility          </td>
          <td><a href="upload/aicte/aicte-1/14. Transport Facility.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>15</td>
          <td>Projectors in Classrooms          </td>
          <td><a href="upload/aicte/aicte-1/15. Projectors in Classrooms.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>16</td>
          <td>Auditorium          </td>
          <td><a href="upload/aicte/aicte-1/16. Auditorium.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>17</td>
          <td>Staff Quarters          </td>
          <td><a href="upload/aicte/aicte-1/17. Staff Quarters.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>18</td>
          <td>Display of Course(s) and Approved Intake in the Institution at the entrance of the Institution. Course(s) taken through duly recognized MOOCs shall be used as Supplementary Course(s)          </td>
          <td><a href="upload/aicte/aicte-1/18. Display of Course(s).pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>19</td>
          <td>General Insurance          </td>
          <td><a href="upload/aicte/aicte-1/19. General Insurance.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>20</td>
          <td>Intellectual Property Right Cell          </td>
          <td><a href="upload/aicte/aicte-1/20. Intellectual Property Right Cell.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>21</td>
          <td>Implementation of Unnat Bharat Abhiyan/Saansad Adarsh Gram Yojana (SAGY)          </td>
          <td><a href="upload/aicte/aicte-1/21. Implementation of Unnat Bharat AbhiyanSaansad Adarsh Gram Yojana (SAGY).pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>22</td>
          <td>Implementation of Startup Policy          </td>
          <td><a href="upload/aicte/aicte-1/22. Implementation of Startup Policy.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>23</td>
          <td>Innovation Cell/Club          </td>
          <td><a href="upload/aicte/aicte-1/23. Innovation Cell Club.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>24</td>
          <td>Media Cell          </td>
          <td><a href="upload/aicte/aicte-1/24. Media Cell.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>25</td>
          <td>Participation in the NIRF          </td>
          <td><a href="upload/aicte/aicte-1/25. Participation in the NIRF.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>26</td>
          <td>Participation in the National Innovation Ranking          </td>
          <td><a href="upload/aicte/aicte-1/26. Participation in the National Innovation Ranking.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>27</td>
          <td>Measures for Cybersecurity          </td>
          <td><a href="upload/aicte/aicte-1/27. Measures for Cybersecurity.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>28</td>
          <td>Availability of Quality Sanitary Napkins through Sanitary Napkin Vending Machines and ensuring Safe and Environment friendly disposal of used Sanitary Napkin          </td>
          <td><a href="upload/aicte/aicte-1/28. Availability of Quality Sanitary N.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>29</td>
          <td>Rain Water Harvesting          </td>
          <td><a href="upload/aicte/aicte-1/29. Rain Water Harvesting.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>30</td>
          <td>Implementation of Skill India Mission          </td>
          <td><a href="upload/aicte/aicte-1/30. Implementation of Skill India Mission.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>31</td>
          <td>Facilitate teachers for undergoing Pedagogical training through NITTT Guidelines          </td>
          <td><a href="upload/aicte/aicte-1/31. Facilitate teachers for undergoing Pedagogical training through NITTT Guidelines.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>32</td>
          <td>Implementation of One Student One Laptop Scheme          </td>
          <td><a href="upload/aicte/aicte-1/32. Implementation of One Student One Laptop Scheme.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>33</td>
          <td>Availability of at least ONE Smart Class Room per Department          </td>
          <td><a href="upload/aicte/aicte-1/33. Availability of at least ONE Smart Class Room per Department.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>34</td>
          <td>Green and eco-friendly campus which focuses on energy efficiency by preserving natural resources for healthy living and a good learning environment.          </td>
          <td><a href="upload/aicte/aicte-1/34. Green and eco-friendly campus which focuses.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- ✅ Essential -->
  <div id="essential" class="doc-table" style="display:none;">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S. No.</th>
          <th>File Name</th>
          <th>PDF Link</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Establishment of Online Grievance Rederssal Mechanism</td>
          <td><a href="upload/aicte/1. Establishment of Online Grievance Rederssal Mechanism.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Establishment of Anti Ragging Committee</td>
          <td><a href="upload/aicte/2. Establishment of Anti Ragging Committee.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Establishment of Grievance Redressal Committee in the Institution and/or Appointment of OMBUDSMAN by the University</td>
          <td><a href="upload/aicte/3. Establishment of Grievance Redressal Committee in the Institution.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Establishment of Internal Committee (IC): (along with Annual Report)</td>
          <td><a href="upload/aicte/4. Establishment of Internal Committee (IC) (along with Annual Report).pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>5</td>
          <td>Establishment of Committee For SC/ST</td>
          <td><a href="upload/aicte/5. Establishment of Committee For SC-ST.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>6</td>
          <td>Internal Quality Assurance Cell</td>
          <td><a href="upload/aicte/6. Internal Quality Assurance Cell.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>7</td>
          <td>Barrier free Environment</td>
          <td><a href="upload/aicte/7. Barrier free Environment.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>8</td>
          <td>Fire and Safety Certificate</td>
          <td><a href="upload/aicte/8. Fire and Safety Certificate.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>9</td>
          <td>Implementation of mandatory Internship Policy for Students          </td>
          <td><a href="upload/aicte/9. Implementation of mandatory Internship Policy for Students.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>10</td>
          <td>Implementation of Teacher Training Policy          </td>
          <td><a href="upload/aicte/10. Implementation of Teacher Training Policy.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>11</td>
          <td>Atleast 5 MoUs with Industries?          </td>
          <td><a href="upload/aicte/11. Atleast 5 MoUs with Industries - Notice-1.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>12</td>
          <td>Compliance of the Academic Bank of Credit (ABC) as per MoE directives, (Applicable for Standalone Institutions, PGDM/PGCM and Universities).          </td>
          <td><a href="upload/aicte/12. Compliance of the Academic Bank of Credit (ABC).pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>13</td>
          <td>Whether the Institution has Implemented Safety and Security measures in the Campus?          </td>
          <td><a href="upload/aicte/13. Whether the Institution has Implemented Safety and Security measures in the Campus.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>14</td>
          <td>Implementing Food Safety and Standard Act, 2006 in the Institution          </td>
          <td><a href="upload/aicte/14. Implementing Food Safety and Standard Act, 2006 in the Institution.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>15</td>
          <td>Digital Payment for all Financial Transactions as per MHRD Directives          </td>
          <td><a href="upload/aicte/15. Digital Payment for all Financial Transactions as per MHRD Directives.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>16</td>
          <td>Display of information submitted to AICTE (including the accreditation status and Board of Governors) along with mandatory disclosures in the Web site of the Institution          </td>
          <td><a href="upload/aicte/16. Display of information submitted to AICTE (Along with Mandatory Disclosure).pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>17</td>
          <td>Potable Water Supply          </td>
          <td><a href="upload/aicte/17. Potable Water Supply.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>18</td>
          <td>Electrical Grid Power Supply Connection          </td>
          <td><a href="upload/aicte/18. Electrical Grid Power Supply Connection & Backup Electric Supply - Copy.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>19</td>
          <td>Backup Electric Supply          </td>
          <td><a href="upload/aicte/19. Electrical Grid Power Supply Connection & Backup Electric Supply.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>20</td>
          <td>Sports Facilities          </td>
          <td><a href="upload/aicte/20. Sports Facilities.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>21</td>
          <td>Waste Management and environment improvement measures to ensure a sustainable Green Campus          </td>
          <td><a href="upload/aicte/21. Waste Management and environment improvement measures to ensure a sustainable Green Campus.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>22</td>
          <td>Sewage Disposal System          </td>
          <td><a href="upload/aicte/22. Sewage Disposal System.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>23</td>
          <td>Display Board within the premises as well as in the Website of the Institution Indicating the Feedback Facility of Students and Faculty Available in the AICTE Web Portal          </td>
          <td><a href="upload/aicte/23. Display Board within the premises as well as in the Website of the Institution Indicating the Feedback Facility of Students and Faculty Available in.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>24</td>
          <td>First Aid, Medical and counselling facilities          </td>
          <td><a href="upload/aicte/24. First Aid, Medical and counselling facilities.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>25</td>
          <td>Insurance for Students          </td>
          <td><a href="upload/aicte/25. Insurance for Students.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>26</td>
          <td>Group Accident Policy to be provided for the Employees          </td>
          <td><a href="upload/aicte/26. Group Accident Policy to be provided for the Employees.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>27</td>
          <td>All Weather Approach(Motorized Road)          </td>
          <td><a href="upload/aicte/27. All Weather Approach(Motorized Road).pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>28</td>
          <td>Institution-Industry Cell          </td>
          <td><a href="upload/aicte/28. Institution-Industry Cell.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>29</td>
          <td>Copies of AICTE Approvals(LOA and EOA of subsequent years)obtained since Inception of Institution till date shall be placed in the Website of the Institution          </td>
          <td><a href="upload/aicte/29. Copies of AICTE Approval.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>30</td>
          <td>Appointment of Student Counselor          </td>
          <td><a href="upload/aicte/30. Appointment of Student Counselor.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>31</td>
          <td>Vehicle Parking          </td>
          <td><a href="upload/aicte/31. Vehicle Parking.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>32</td>
          <td>General Notice Board and Departmental Notice Boards          </td>
          <td><a href="upload/aicte/32. General Notice Board and Departmental Notice Boards.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>33</td>
          <td>Display of Course(s) and Approved Intake in the Institution at the entrance of the Institution          </td>
          <td><a href="upload/aicte/33. Display of Course(s) and Approved Intake in the Institution at the entrance of the I.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>34</td>
          <td>Establishment of 24x7 women helpline number and a security system in the campus for providing safety to students and female faculty and non-teaching faculty.          </td>
          <td><a href="upload/aicte/34. Establishment of 24x7 women helpline number.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>35</td>
          <td>Establishment of platform or hiring counsellors for seeking help and guidance w.r.t psychological counselling related to Mental Health for Students, faculty and non-teaching faculty.          </td>
          <td><a href="upload/aicte/35. Establishment of platform or hiring counsellors for seeking help and guidance.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>36</td>
          <td>As per NEP, every Institution shall have inbuilt mechanism for Social and Emotional Learning A crucial component of Education.          </td>
          <td><a href="upload/aicte/36. Social & Emotional Learning S - Ok.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>37</td>
          <td>The electives mandatorily through SWAYAM (MOOCS Platform)          </td>
          <td><a href="upload/aicte/37. The electives mandatorily through SWAYAM (MOOCS Platform 1 - Ok.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>38</td>
          <td>Language Laboratory (for institutions having Diploma and Degree Programs)          </td>
          <td><a href="upload/aicte/38. Language Laboratory (for institutions having Diploma and Degree Programs).pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>39</td>
          <td>Internship shall be made compulsory for all final year students of AICTE approved Institutes/Universities.          </td>
          <td><a href="upload/aicte/39. Internship shall be made compulsory for all final year students of AICTE approved InstitutesUni.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
        <tr>
          <td>40</td>
          <td>The AICTE approved institutions shall evolve a mechanism for earning credits through â€˜Skillingâ€™ based courses offered by Skill India, Ministry of Skill Development and Entrepreneurship OR any other leading skilling platforms in order to improve their skill sets and employability          </td>
          <td><a href="upload/aicte/40. Mechanism for earning credits through â€˜Skillingâ€™.pdf#toolbar=0&navpanes=0&scrollbar=0" target="_blank" rel="noopener noreferrer">View</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

<script>
  const buttons = document.querySelectorAll(".toggle-btn");
  const tables = document.querySelectorAll(".doc-table");

  buttons.forEach(button => {
    button.addEventListener("click", () => {
      const target = button.getAttribute("data-target");

      // Toggle tables
      tables.forEach(table => {
        table.style.display = (table.id === target) ? "block" : "none";
      });

      // Toggle active button
      buttons.forEach(btn => btn.classList.remove("active-btn"));
      button.classList.add("active-btn");
    });
  });

  // Set initial active tab and style
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelector('.toggle-btn[data-target="mandatory"]').classList.add("active-btn");
    document.querySelector('#mandatory').style.display = "block";
  });
</script>

</body>
</html>

<?php require "common/footer.php" ?>
