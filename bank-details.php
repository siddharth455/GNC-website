<?php
    require "common/header.php";
?>
  <div class="container-payment mb-3">
    <h1>Bank Account Details</h1>
    <p>
      The students/ guardians can deposit pending fees for admission/joining/semester fee.
    </p>
    <section class="info">
      <p>Deposit cash at the bank into the University Accounts/NEFT/RTGS:</p>

      <!-- Faculty Section 1 -->
      <div class="faculty-card">
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <th>Programme</th>
                <th>Account Holder Name</th>
                <th>Bank Name</th>
                <th>Account No.</th>
                <th>IFSC</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Programme">All Programmes</td>
                <td data-label="Account Holder Name">Guru Nanak College Dehradun</td>
                <td data-label="Bank Name">ICICI Bank</td>
                <td data-label="Account No.">695401701775</td>
                <td data-label="IFSC">ICIC0006954</td>
              </tr>
              <!-- Add more rows here if needed -->
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <p>
      <a href="https://smartpay.easebuzz.in/124916/AdmissionFee" class="btn">Online Payment</a>
    </p>
  </div><!-- .container-payment -->

<?php
    require "common/footer.php";
?>

<style>
/* General Styles */
.container-payment {
  max-width: 90%;
  margin: 13rem auto auto auto;
  padding: 1rem;
}
h1 { color: #0052a5; }
h2 { margin-top: 1.5rem; color: #004080; }
.h2 + p { margin-bottom: 1rem; }

.btn {
  display: inline-block;
  margin: 1rem 0;
  padding: 0.6rem 1rem;
  background: #0052a5;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
}
.btn:hover {
  background: #003d7a;
}

.faculty-card {
  margin-bottom: 1.5rem;
}

/* Table Styles */
.table-responsive table {
  width: 100%;
  border-collapse: collapse;
}
th, td {
  padding: 0.6rem 0.8rem;
  border: 1px solid #ccc;
  text-align: left;
}
thead {
  background: #e1eaff;
}

/* Mobile Responsive Table */
@media (max-width: 768px) {
  .table-responsive table,
  .table-responsive thead,
  .table-responsive tbody,
  .table-responsive th,
  .table-responsive td,
  .table-responsive tr {
    display: block;
    width: 100%;
  }

  .table-responsive thead {
    display: none;
  }

  .table-responsive tr {
    margin-bottom: 1rem;
    background: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 6px;
    padding: 0.5rem;
  }

  .table-responsive td {
    padding: 0.6rem 0.8rem;
    text-align: left;
    position: relative;
    border: none;
    border-bottom: 1px solid #eee;
  }

  .table-responsive td::before {
    content: attr(data-label);
    font-weight: bold;
    color: #0052a5;
    display: block;
    margin-bottom: 0.3rem;
  }
}
</style>
