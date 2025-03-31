 <?php require "common/header.php" ?>
<section class="pageBanner-inner">
        <div style="background-image: url('upload/infra/35.webp'); background-repeat: no-repeat; background-size: cover;">
            <div class="pageBanner-inner_in">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xl-7">
                            <div class="pageBanner-inner__content inner-content head-sm text-md-start">
                                <div class="upper-banner-content">
                                    <h3 class="mb-1 mt-3">Research Paper</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="know-about-section pt-5 pb-3 text-center">
    <div class="container">
        <div class="section-heading">
            <h2 class="mb-3">Academic Excellence Through Research</h2>
        </div>
        <p style="text-align: left;">Guru Nanak College of Pharmaceutical Sciences has strategically aligned its research areas with emerging local and national priorities in pharmacy, biotechnology and climate change challenges. This comprehensive approach ensures its work addresses global challenges while fostering pharmaceutical innovation.</p>
    </div>
</section>
<div id="chart-container">
    <canvas id="bookChaptersChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
<script>
    function adjustFontSize(chart) {
        const mobileFontSize = window.innerWidth <= 480 ? 16 : 24;
        chart.options.plugins.datalabels.font.size = mobileFontSize;
        chart.update();
    }
    const ctx = document.getElementById('bookChaptersChart').getContext('2d');
    const bookChaptersChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
            datasets: [{
                label: 'Research Paper',
                data: [3, 3, 9, 3, 21, 35, 4], // Replace these numbers with your actual data 
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 23, 1)',
                    'rgba(168, 152, 133, 1)',
                    'rgba(155, 122, 189, 1)'
                ],
                borderColor: [
                    'rgb(0, 0, 0)',
                    'rgb(0, 0, 0)',
                    'rgb(0, 0, 0)',
                    'rgb(0, 0, 0)',
                    'rgb(0, 0, 0)',
                    'rgb(0, 0, 0)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                datalabels: {
                    color: 'black',
                    anchor: 'end',
                    align: 'start',
                    formatter: (value, context) => value,
                    font: {
                        weight: 'bold',
                        size: 24
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    });
    adjustFontSize(bookChaptersChart);

    window.addEventListener('resize', () => {
        adjustFontSize(bookChaptersChart);
    });
</script>
<section class="container">
    <h4>Research Papers</h4>
    <div style="overflow-x:auto;">
        <table class="table table-bordered">
            <thead>
                <tr class="heading">
                    <th scope="col"><b>S.No.</b></th>
                    <th scope="col"><b>Title of Paper</b></th>
                    <th scope="col"><b>Name of the Author/s</b></th>
                    <th scope="col"><b>Article Link </b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Role of Essential Oil Used Pharmaceutical Cosmetic Product</td>
                    <td>Atul Sharma, Vinay Kumar, Chavi Mittal,<b> Dr. Vinod Rana, Kriti Dabral &amp; Gulafshan Parveen </b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/246" target="_blank">Click Here</a> </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Review on: Pharmacological Activity of Caterpilllar fungus (Keeda Jadi)</td>
                    <td>Bhavesh Bharti, Menuka Chaudhary, <b>Dr. Vinod Rana, Salman Ahmad, Neha Tamta, Kriti Dabral &amp; Yashika Uniyal</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/241" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Role of Essential Oils and Bioactive Components for Manufacturing Cosmetic Items</td>
                    <td>Aditi &amp;<b> Ms. Kriti Dabral</b></td>
                    <td><a href="https://www.jrasb.com/index.php/jrasb/article/view/128" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>A Review On: Biomolecules as Drugs</td>
                    <td>Bhavesh Bharti &amp; <b>Ms Kriti Dabral</b></td>
                    <td><a href="https://ijprajournal.com/issue_dcp/A%20Review%20On%20%20Biomolecules%20as%20Drugs.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Market Survey Of Anti- Tubercular Drugs</td>
                    <td>Mehfooj Ali, Mohd Qamar &amp;<b> Ms Kriti Dabral</b></td>
                    <td><a href="https://www.jetir.org/papers/JETIR2211322.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Bio-Fabrication of Cu/Ag/Zn Nanoparticles and Their Antioxidant and Dye Degradation Activities</td>
                    <td>Srijal Kunwar, Arpita Roy, Utsav Bhusal, Amel Gacem, Mahmood M. S. Abdullah, Promila Sharma, Krishna Kumar Yadav, Sarvesh Rustagi,<b> Nidhi Chatterjee, Vishal Kumar Deshwal</b> , Hyun-Kyung Park &amp; Byong-Hun Jeon </td>
                    <td><a href="https://www.mdpi.com/2073-4344/13/5/891" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Therapeutic potential of lipid nanosystems for the treatment of Parkinson’s disease</td>
                    <td>Subham Preetam, Swathi Jonnalagadda, Lamha Kumar, Rajeswari Rath, Soham Chattopadhyay, Badrah S. Alghamdi, Adel M Abuzenadah, Niraj Kumar Jha, Akash Gautam,<b> Sumira Malik</b> &amp; Ghulam Md Ashraf</td>
                    <td><a href="https://www.sciencedirect.com/science/article/abs/pii/S1568163723001241 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>System Biology Approach to Identify the Hub Genes and Pathways Associated with Human H5N1 Infection</td>
                    <td>Raushan Kumar Chaudhary, Ananthesh L., Prakash Patil, Uday Venkat Mateti, Sanjit Sah, Aroop Mohanty, Rama S. Rath, Bijaya Kumar Padhi,<b> Sumira Malik</b>, Kadhim Hussein Jassim, Moustafa A. Al-Shammari, Yasir Waheed, Prakasini Satapathy, Joshuan J. Barboza, Alfonso J. Rodriguez-Morales &amp; Ranjit Sah </td>
                    <td><a href="https://www.mdpi.com/2076-393X/11/7/1269 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Nano-biochar: recent progress, challenges, and opportunities for sustainable environmental remediation</td>
                    <td>Geeta Bhandari, Saurabh Gangola, Archna Dhasmana, Vishal Rajput, Sanjay Gupta,<b> Sumira Malik</b> &amp; Petr Slama</td>
                    <td><a href="https://www.frontiersin.org/journals/microbiology/articles/10.3389/fmicb.2023.1214870/full " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Nanoscale molecular reactions in microbiological medicines in modern medical applications</td>
                    <td>Radjarejesri Shesayar, Amit Agarwal, Syed Noeman Taqui, Yuvaraj Natarajan, Sarvesh Rustagi, Sweety Bharti,<b> Anchal Trehan</b>, Kanagasabapathy Sivasubramanian, Moorthy Muruganandham, Palanivel Velmurugan, Natarajan Arumugam, Abdulrahman I. Almansour, Raju Suresh Kumar &amp; Subpiramaniyam Sivakumar</td>
                    <td><a href="https://www.degruyter.com/document/doi/10.1515/gps-2023-0055/html?lang=en " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>Effect of heat treatment on the quality of citrus juices</td>
                    <td>Vijay Kumar, Deepika Kohli, Bindu Naik, Ankit Ratore, Arun Kumar Gupta, Javed Masood Khan, Mohammad Irfan, Manpreet Singh Preet,<b> Nidhi Chatterjee</b> &amp; Sarvesh Rustagi</td>
                    <td><a href="https://www.sciencedirect.com/science/article/pii/S1018364723002811 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>Fungal-Based Remediation in the Treatment of Anthropogenic Activities and Pharmaceutical-Pollutant-Contaminated Wastewater</td>
                    <td><b>Sumira Malik</b>, Jutishna Bora, Sagnik Nag, Sweta Sinha, Sagar Mondal, Sarvesh Rustagi, Richismita Hazra, Harshavardhan Kumar, Vishnu D. Rajput , Tatiana Minkina, Najwane Said Sadier &amp; Abdulmajeed G. Almutary</td>
                    <td><a href="https://www.mdpi.com/2073-4441/15/12/2262#:~:text=Fungi%20could%20now%20be%20considered,compounds%20and%20ease%20of%20handling. " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>Therapeutic Potential of Dillenia indica L. in Attenuating Hyperglycemia-Induced Oxidative Stress and Apoptosis in Alloxan-Administered Diabetic Mice</td>
                    <td>Plabita Sahariah, Jutishna Bora, <b>Sumira Malik</b>, Donkupar Syiem, Surya Bhan, Arif Hussain, Najwane Said Sadier, Sarvesh Rustagi, Shafiul Haque, Nitesh Singh &amp; Abdulmajeed G Almutary </td>
                    <td><a href="https://pubmed.ncbi.nlm.nih.gov/37258477/ " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>In Vitro and In Silico Studies on 4‑Nitroacetophenone Thiosemicarbazone Potential Cytotoxicity Against A549 Cell Lines</td>
                    <td>Neha Verma, Mohini Singh, Piyush Bhati, Sonia Khanna, Mohd Tashfeen Ashraf, Shilpa Kumari,<b> Nidhi Chatterjee, Vishal K Deshwal</b>, Sarvesh Rustagi &amp; Kanu Priya</td>
                    <td><a href="https://link.springer.com/article/10.1007/s12010-023-04814-1 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>Therapeutic applications of CRISPR-Cas9 in diabetes mellitus: a perspective review</td>
                    <td>Jutishna Bora, <b>Sumira Malik</b>, Shristi Kishore, Sarvesh Rustagi, Faraz Ahmad, Sharmila Fagoonee, Rinaldo Pellicano &amp; Shafiul Haque </td>
                    <td><a href="https://www.minervamedica.it/en/journals/minerva-biotechnology-biomolecular-research/article.php?cod=R04Y2023N04A0238 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>A Review On: Local Drug Delivery in Periodontics</td>
                    <td>Menuka Chaudhary &amp; <b>Mrs. Yashika Uniyal</b></td>
                    <td><a href="https://ijprajournal.com/issue_dcp/A%20Review%20On%20Local%20Drug%20Delivery%20in%20Periodontics.pdf" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>A Review Article On Comparative Analysis To Report Quality Parameters Of Triphala Churna</td>
                    <td>Ritika Malik &amp; <b>Mrs. Yashika Uniyal</b></td>
                    <td><a href="https://rjpn.org/ijcspub/papers/IJCSP23B1445.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>Therapeutic Potency of IV Ferricpyrophospatein Chronic Kidneydisease</td>
                    <td>Sourav Dhibar &amp; <b>Ashna Kohli</b></td>
                    <td><a href="https://ijprajournal.com/issue_dcp/Therapeutic%20Potency%20of%20IV%20Ferricpyrophospatein%20Chronic%20Kidneydisease.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>Role of Terpenoids Active Ingredients Targeting for Neuroprotective Agents</td>
                    <td>Neelmani Kashyap,<b> Roshan Kumar, Dr. Vinod Rana, Prachi Sood</b> &amp; Tanshavi Chauhan</td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/230 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>A Review On Couses And Treatment Of Haemorrhoid</td>
                    <td>Devendra Kumar, <b>Yashika Uniyal</b> &amp; Atul Sharma</td>
                    <td><a href="https://www.rjpn.org/ijcspub/papers/IJCSP23B1408.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">21</th>
                    <td>A Review On Sustained Release Drug Delivery Systems</td>
                    <td>Devendra Kumar &amp; <b>Mrs.Yashika Uniyal</b></td>
                    <td><a href="https://www.rjpn.org/ijcspub/papers/IJCSP22D1403.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">22</th>
                    <td>Role of Antioxidants of Natural Herbs in Management of Male Infertility</td>
                    <td>Md. Gaznee,<b> Ms. Ashna Kohli &amp; Roshan Kumar</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/129 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">23</th>
                    <td>BCS Class II Drug & Its Solubility Enhancement: A Review</td>
                    <td>Yogesh Kumar Bajpai, Sandeep Singh, <b>Mrs. Vijaylaxmi Bisht, Kanchan Butola</b>, Abhishek Awasthi &amp; Sahil Kumar</td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/95 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">24</th>
                    <td>Recent Approaches of Matrix Release Tablet in NDDS System</td>
                    <td>Sashank Shekhar,<b> Alok Kumar, Dr. Vinod Rana, Roshan Kumar, Chavi Mittal &amp; Kanchan Tariyal</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/234 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">25</th>
                    <td>Review On: Matrix Release Drug Delivery System</td>
                    <td>Sashank Shekhar &amp; <b>Vijaylaxmi Bisht</b></td>
                    <td><a href="https://ijprajournal.com/issue_dcp/Review%20On%20Matrix%20Release%20Drug%20Delivery%20System.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">26</th>
                    <td>Marketing Survey Of Anti Cancer Drug</td>
                    <td>Usman Ali, Mohd Qamar &amp; <b>Mrs.Yashika Uniyal</b></td>
                    <td><a href="https://www.jetir.org/view?paper=JETIR2211548 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">27</th>
                    <td>Microsponges Of Diclofenac Sodium</td>
                    <td>Shahid Ali, Mohd Qamar &amp; <b>Ms Shivali Sagar</b></td>
                    <td><a href="https://www.jetir.org/papers/JETIR2211314.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">28</th>
                    <td>Cytokine Storm In Covid-19 Patient; What We Know</td>
                    <td>Tapas Mishra, <b>Yashika Uniyal</b> &amp; Shiba S. Morris</td>
                    <td><a href="http://www.ajrpsb.com/article/CYTOKINE%20STORMIN%20COVID-19%20PATIENT;%20WHAT%20WE%20KNOW.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">29</th>
                    <td>Remdesivir – Complite Pharmacology</td>
                    <td>Sambhav Pathak, Parth Verma, <b>Kriti Dabral</b> &amp; Shiba S. Morris</td>
                    <td><a href="http://ijrpns.com/article/REMDESIVIR%20%E2%80%93%20COMPLITE%20PHARMACOLOGY.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">30</th>
                    <td>Marketing survey of tuberculosis</td>
                    <td>Mehfooj Ali, Mohd Qamar &amp; <b>Ms Kriti Dabral</b></td>
                    <td><a href="https://www.jetir.org/view?paper=JETIR2211322 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">31</th>
                    <td>What’S The Best Time To Take Medicine</td>
                    <td>Parth Verma, Sambhav Pathak, <b> P. Gulafshan</b> &amp; Shiba S. Morris</td>
                    <td><a href="http://www.ajrpsb.com/article/WHAT%E2%80%99S%20THE%20BEST%20TIME%20TO%20TAKE%20MEDICINE.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">32</th>
                    <td>Herbal Essential Oil use as Ulcer Protective Activity: A Systematic Review</td>
                    <td>Harsh Chaudhary, <b>Shivali Sagar, Roshan Kumar, Mrs. Vijaylaxmi Bisht &amp; Kanchan Butola</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/99 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">33</th>
                    <td>A Study On Microneedles For Transdermal Drugs Delivery System</td>
                    <td>Mr.Anil Adhikari,<b> Mrs. Kanchan Tariyal, Mr.Salman Ahmad </b> &amp; Mr. Ayush Verma</td>
                    <td><a href="https://rjpn.org/ijcspub/viewpaperforall.php?paper=IJCSP23B1409 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">34</th>
                    <td>Ocular Drug Delivery Systems</td>
                    <td>Mohd Suhail &amp; <b>Kanchan Tariyal</b></td>
                    <td><a href="https://ijmpronline.com/home/article_abstract/728 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">35</th>
                    <td>Recent Approaches of Intranasal to Brain Drug Delivery System</td>
                    <td>Sharad Bajpai, Yogesh Kumar Bajpai, Abhishek Awasthi,<b> Chavi Mittal, Kanchan Tariyal, Prachi Sood &amp; Roshan Kumar</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/250 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">36</th>
                    <td>Recent Advancement on TDDS (Transdermal Drug Delivery System)</td>
                    <td>Sharad Bajpai,<b> Kanchan Butola &amp; Mrs. Vijaylaxmi Bisht</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/96 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">37</th>
                    <td>Recent Advancement of Colorectal Cancer and Their Herbal Essential Oil Treatment</td>
                    <td>Aditya Kumar, <b>Mrs. Yashika Uniyal &amp; Roshan Kumar</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/104 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">38</th>
                    <td>Formulation and Evaluation of Albumin Microspheres of Paracetamol</td>
                    <td>Sandeep Singh, Yogesh Kumar Bajpai &amp;<b> Gulafshan Parveen</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/103 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">39</th>
                    <td>An Evaluation Of Anti-Diabetic Activity Of Calotropis Procera Leaf Extraction (Aak Palnt)</td>
                    <td>Mohd Aalam, <b>Gulafshan Parveen</b> &amp; Chavi Mittal</td>
                    <td><a href="https://ijpjournal.com/bft-article/an-evaluation-of-anti-diabetic-activity-of-calotropis-procera-leaf-extraction-aak-palnt/ " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">40</th>
                    <td>Human-to-Human Transmission of Monkeypox Virus Old Virus with a New Face</td>
                    <td>Poonam Joshi, Aanchal Loshali, Yogita Ale, <b>Gulafshan Parveen</b>, Purabi Saha &amp; Vikas Jakhmola</td>
                    <td><a href="https://microbiologyjournal.org/abstract-16-spl1-14/ " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">41</th>
                    <td>Review on: Preparation and Evaluation of Paracetamol Emulsion dosage Form</td>
                    <td>Alok Kumar &amp; <b>Gulafshan Parveen</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/98 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">42</th>
                    <td>Randomized Phase III Trial Comparing Epirubicin/ Doxorubicin Plus Docetaxel and Epirubicin/ Doxorubicin Plus Paclitaxel as First Line Treatment in Women with Advanced Breast Cancer</td>
                    <td>Ranjan Raj, Aditya Kumar, <b>Prachi Sood, Roshan Kumar &amp; Dr. Vinod Rana</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/232 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">43</th>
                    <td>Recent Advancement in Ocular Drug Delivery System: A Systematic Review</td>
                    <td><b>Chavi Mittal</b>, Vandana Sonaji Amle, <b>Roshan Kumar, Prachi Sood</b>, Archna Uniyal &amp; Harjeet Singh</td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/264 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">44</th>
                    <td>Combine Therapy of Gallic Acid and Allicin in Management of Diabetes</td>
                    <td><b>Roshan Kumar, Prachi Sood, Dr. Vinod Rana</b> &amp; Anand Kumar Prajapati</td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/238 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">45</th>
                    <td>Does Combination of Herbal Plants As A Treatment in Inflammation Show Synergistic Effect? My Point of View</td>
                    <td>Shrestha Sarkar &amp; <b>Ashna Kohli</b></td>
                    <td><a href="https://ijprajournal.com/issue_dcp/Does%20Combination%20of%20Herbal%20Plants%20As%20Atreatment%20in%20Inflammation%20Show%20Synergistic%20Effect%20%20My%20Point%20of%20View.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">46</th>
                    <td>A Comprehensive Study on Anthemintic Activity of Some Herbal Plants and Its Essential Oil</td>
                    <td>Ranjan Raj &amp; <b>Ashna Kohli</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/100 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">47</th>
                    <td>An Overview on the sign of the interaction between thyroid and kidney disease</td>
                    <td><b>Monika Semwal &amp;</b> Asheesh Kumar Gupta</td>
                    <td><a href="https://www.apjnh.com/index.php/apjnh/article/view/15 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">48</th>
                    <td>A review on nephrotic syndrome with their causes, complications and epidemiology</td>
                    <td><b>Monika Semwal</b></td>
                    <td><a href="https://apjnh.com/index.php/apjnh/article/view/18 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">49</th>
                    <td>A Review on the Discovery of Different Stem Cells and the Potential Therapies based on these Cells</td>
                    <td><b>Monika Semwal</b></td>
                    <td><a href="https://core.ac.uk/download/pdf/324301332.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">50</th>
                    <td>A Review on Ganoderma (King of herbs): Health benefits as health supplements</td>
                    <td><b>Monika Semwal</b> &amp; Yogita Sharma</td>
                    <td><a href="https://ijhcr.com/index.php/ijhcr/article/view/52 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">51</th>
                    <td>A Short Review On Eye Drug Absoption Routes</td>
                    <td>Harjeet Kumar, Kanchan Kumari, Abhishek Kumar, Harsh Gupta, <b>Rachna Belwal, Jyotsna Upadhyay &amp; Farha Naaz</b></td>
                    <td><a href="https://storage.googleapis.com/journal-uploads/wjpps/article_issue/1694570313.pdf  " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">52</th>
                    <td>Effect Of Strething Exercise To Reduce Primary Dysmenorrhoea Among Dehradun College Girls (Urban, Rural And Slum Area)</td>
                    <td>Aditi, Raunak Kumar Prajapati, <b>Jyoti Saxena, Kanchan Tariyal, Vijaylaxmi Bist, Prachi Sood</b> &amp; Roshan Kumar</td>
                    <td><a href="https://www.eurchembull.com/uploads/paper/9c9ff0edcb6318d5b3c2fbfd838a1028.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">53</th>
                    <td>A Review on Most Opthalmic Viral Disease Conjunctivitivs (Eye Flu)</td>
                    <td>Harjeet Kumar, <b>Roshan Kumar, Prachi Sood, Rachana Belwal, Jyotsna Upadhyay, Farha Naaz</b>, Ankit Kumar &amp; Monu</td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/289 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">54</th>
                    <td>Case Report on Conjunctivitis an Outbreak Disease in Dehradun India</td>
                    <td>Harjeet Kumar Singh, Monu, <b>Roshan Kumar &amp; Prachi Sood</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/288 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">55</th>
                    <td>Clinical Features Present, Past & Future Prospective of Monkey Pox: A Orthopoxvirus</td>
                    <td>Siddhartha Shukla, Naveen Rawat, Sarthak Rana,<b> Dr. Vinod Rana, Chavi Mittal, Roshan Kumar &amp; Prachi Sood</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/242 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">56</th>
                    <td>Recent Approaches of Ocular Disease and Its Herbal Product Treatment: An Updates</td>
                    <td><b>Kanchan Butola, Mrs. Vijaylaxmi Bisht &amp; Roshan Kumar</b></td>
                    <td><a href="https://jrasb.com/index.php/jrasb/article/view/192 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">57</th>
                    <td>Assessment of the Ichthyofaunal Diversity in relation to Physico-chemical attributes of River Asan in the Garhwal Himalaya, India</td>
                    <td>Ashu Chaudhary, Dhyal Singh, Deepali Rana, Sarvesh Rustagi, Shefalee Singh, Sneha Singh, Pallavi Chauhan &amp; <b>Nidhi Chatterjee</b></td>
                    <td><a href="https://pubs.thesciencein.org/journal/index.php/jist/article/view/a807 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">58</th>
                    <td>Isolation and Screening of Microorganisms from Waste Dumping Sites for Biosorption of Cadmium and Lead</td>
                    <td><b>Meenu Butola, Neelesh Babu &amp; Vishal Kumar Deshwal</b></td>
                    <td><a href="https://www.sagens.org/journal/agens/article/view/s2023010105 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">59</th>
                    <td>Covid-19: Impact of Lockdown and Comparative Study in Top Infected Countries in Asian, European and American Continent</td>
                    <td><b>Vishal Kumar Deshwal</b></td>
                    <td><a href="https://www.ijirset.com/upload/2020/may/168_COVID_NC.PDF " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">60</th>
                    <td>Impact Combination of Amoxicillin and Gentamicin on Growth of Staphylococcus Aureus and Streptococcus Pyogenes</td>
                    <td><b>Vishal Kumar Deshwal</b>, Manisha, <b>Harpreet Singh, Eeshtee Sood &amp; Aditi</b></td>
                    <td><a href="http://www.ijsred.com/volume3/issue3/IJSRED-V3I3P19.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">61</th>
                    <td>Inhibitory Effect of Different Hand Sanitizer Against Staphylococcus Aureus</td>
                    <td>Pranavi Kakroo, Shalini Shekhar, Km Bhawna Pathani, Shashi Shekhar Shukla, Garima Arora &amp;<b> Vishal Kumar Deshwal</b></td>
                    <td><a href="http://www.ijsred.com/volume3/issue3/IJSRED-V3I3P36.pdf" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">62</th>
                    <td>COVID 19: Analysis Disease Pattern, Treatment And Use Of Advance Technology To Control Spreading Of Disease</td>
                    <td><b>Vishal Kumar Deshwal</b></td>
                    <td><a href="https://storage.googleapis.com/journal-uploads/ejpmr/article_issue/1588152699.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">63</th>
                    <td>Unstoppable COVID 19: A Comparative Study On Top 13 Affected Countries</td>
                    <td><b>Vishal Kumar Deshwal</b></td>
                    <td><a href="https://www.wjpr.net/abstract_file/14423 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">64</th>
                    <td>Evaluate Impact of Dual Antibiotics on Growth of Staphylococcus Aureus and Streptococcus Pyogenes</td>
                    <td><b>Vishal Kumar Deshwal</b>, Harpreet Singh &amp; Pooja Bisht</td>
                    <td><a href="https://www.ijirset.com/upload/2020/may/54_Evaluate_NC.PDF " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">65</th>
                    <td>COVID 19: A Comparative Study of Asian, European, American continent</td>
                    <td><b>Vishal Kumar Deshwal</b></td>
                    <td><a href="http://www.ijsred.com/volume3/issue2/IJSRED-V3I2P63.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">66</th>
                    <td>Antimicrobial Activity Of Citrus Fruits On Certain Pathogenic Microorganism</td>
                    <td><b>Vishal Kumar Deshwal &amp;</b> Bhagwant Kaur</td>
                    <td><a href="https://jpds.co.in/wp-content/uploads/2020/09/09.-Vishal-Deshwal-1481.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">67</th>
                    <td>Isolation And Characterization Of Antibiotic Producing Actinomycetes Against Certain Pathogens</td>
                    <td><b>Vishal Kumar Deshwal &amp;</b> Mohd Tarik</td>
                    <td><a href="https://jpds.co.in/wp-content/uploads/2020/09/08.-Deshwal-1495.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">68</th>
                    <td>Plant Growth Promoting Pseudomonas Strains Effectively Enhance Plant Growth Of Oryza Sativa.</td>
                    <td><b>Vishal Kumar Deshwal &amp;</b> Niharika Thapliyal1</td>
                    <td><a href="https://jpds.co.in/wp-content/uploads/2020/09/08.-Vishal-Deshwal-1621.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">69</th>
                    <td>Comparative Study Of Microbial Contamination In Fruit Juice In Local Market At Dehradun</td>
                    <td>Sreejoy Saha &amp; <b>Vishal Kumar Deshwal</b></td>
                    <td><a href="https://jpds.co.in/wp-content/uploads/2020/09/10.-Vishal-Deshwal-1482.pdf " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">70</th>
                    <td>Hydrogeochemical Evaluation of Groundwater for Drinking and Irrigation Purposes in the Upper Piedmont Area of Haridwar, India</td>
                    <td>Kanchan Deoli Bahukhandi, Anamika Kushwaha, Lalit Goswami, Uday Bhan, <b>Vishal Kamboj</b>, Nitin Kamboj, Aditi Bisht, Amit Kumar Sharma, Sandip S. Sathe, Vipin Kumar Saini, &amp; Bhavtosh Sharma</td>
                    <td><a href="https://pubs.acs.org/doi/abs/10.1021/acsestwater.2c00419 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">71</th>
                    <td>Groundwater Quality and Potential Health Risk Assessment in the Vicinity of Solid Waste Dumping Sites of Quaternary Shallow Water Aquifers of Ganga Basin</td>
                    <td>Aditi Bisht, Nitin Kamboj &amp; <b>Vishal Kamboj</b> </td>
                    <td><a href="https://link.springer.com/article/10.1007/s11270-022-05954-6#auth-Vishal-Kamboj-Aff2 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">72</th>
                    <td>Evaluating groundwater pollution with emphasizing heavy metal hotspots in an urbanized alluvium watershed of Yamuna River, northern India</td>
                    <td>Salman Ahmed, Naseem Akhtar, Abdur Rahman, N.C. Mondal, Shadab Khurshid, Sarah Sarah, Mohammad Muqtada Ali Khan &amp; <b>Vishal Kamboj</b></td>
                    <td><a href="https://www.sciencedirect.com/science/article/abs/pii/S2215153222001040 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th scope="row">73</th>
                    <td>Air quality assessment of Jaipur city Rajasthan after the COVID-19 lockdown</td>
                    <td>Mukesh Ruhela, Vedansh Maheshwari, Faheem Ahamad &amp; <b>Vishal Kamboj</b> </td>
                    <td><a href="https://link.springer.com/article/10.1007/s41324-022-00456-3 " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th>74</th>
                    <td>Current status of pesticide effects on environment, human health and it’s eco-friendly management as bioremediation: A comprehensive review</td>
                    <td>"Vinay Mohan Pathak, Vijay K. Verma,
                        Balwant Singh Rawat, Baljinder Kaur, <b>Neelesh Babu</b>,
                        Akansha Sharma, Seeta Dewali, Monika Yadav,
                        Reshma Kumari, Sevaram Singh, Asutosh Mohapatra,
                        Varsha Pandey, Nitika Rana and Jose Maria Cunill"
                    </td>
                    <td><a href="https://www.frontiersin.org/journals/microbiology  " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th>75</th>
                    <td>Isolation and Screening of Microorganisms from Waste Dumping Sites for Biosorption of Cadmium and Lead</td>
                    <td>Meenu Butola,<b> Neelesh Babu , Vishal Kumar Deshwal</b></td>
                    <td><a href="https://www.sagens.org/journal/agens/index " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th>76</th>
                    <td>Assessment of the Ichthyofaunal diversity in relation to Physico-chemical attributes of River Asan in the Garhwal Himalaya, India</td>
                    <td>Ashu Chaudhary, Dhyal Singh, Deepali Rana, Sarvesh Rustagi, Shefalee Singh, Sneha Singh, Pallavi Chauhan, <b>Nidhi Chatterjee</b></td>
                    <td><a href="https://pubs.thesciencein.org/journal/index.php/jist/index" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th>77</th>
                    <td>Lassa hemorrhagic fever: a comprehensive review on re-emerging infectious diseases</td>
                    <td><b>Malik S.</b>,
                        Deep A.,
                        Bora J.,
                        Mondal S.,
                        Agrawal S.,
                        Ramniwas S.,
                        Nag S.,
                        Rustagi S.
                        Barman I.
                    </td>
                    <td><a href="https://infect-dis-journal.ru/ " target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <th>78</th>
                    <td>A perspective review on the biosynthesis of plant-based secondary metabolites and their application as potent drugs</td>
                    <td>JHILAM PRAMANIK, AKASH KUMAR, SARVESH RUSTAGI, MEHAK KATYAL, SHEETAL THAKUR, JUTISHNA BORA, SUMIRA MALIK, <b>ANCHAL TREHAN</b>, NAYAN TALUKDAR, PETR SLAMA</td>
                    <td><a href="https://www.techscience.com/journal/biocell " target="_blank">Click Here</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php require "common/footer.php" ?>