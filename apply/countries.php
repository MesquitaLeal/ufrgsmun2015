<div id="matrix" class="background">
    <div class="row gray-70 content">
        <div class="breadcrumb">
            <p>home > apply > country matrix</p>
        </div>
        <div class="section-title">
            <h2>Country Matrix</h2>
        </div>
    </div>
<!--<svg class="gray-70-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="40" viewBox="0 0 100 102" preserveAspectRatio="none">
    <path d="M0 0 L50 100 L100 0 Z"></path>
</svg>-->
    <div class="row gray-50 section-p content">
        <div class="col-lg-12">
            <p>
                    You can check which countries are going to be simulated in which committee in our country/committee matrix. <!--It is available in this <a href="#">file</a>. A PDF reader is required to open it.-->
            </p>
            <p>
                    Be aware that although ILC and IPC members are on the list, they do not represent any country.
                    <br/>If there are more registrations than the vacancies in this list, the Secretariat holds the right to include countries which were not listed as stated on our General Policies, so as to guarantee the participation of all duly registered delegates.

            </p>
        </div>
    </div>
</div>

<div>

    <div class="row gray-70 content">
        <div class="col-sm-12 table-responsive">
            <table class="table">
                <tr>
                    <th>Country*</th>
                    <th>APEC</th>
                    <th>CJTf</th>
                    <th>COSIPLAN</th>
                    <th>DISEC</th>
                    <th>UACPS</th>
                    <th>UNHRC</th>
                    <th>UNSC</th>
                    <th>ILC**</th>
                    <th>IPC**</th>
                    <th>Total</th>
                </tr>

                <?php
                    include 'apply/matrix.php';
                ?>

                <?php foreach ($countries as $key => $value) {
                    echo "<tr>";
                    foreach ($value as $a => $b) {
                        echo "<td>" . $b . "</td>";
                    }
                    echo "</tr>";

                } ?>
            </table>
            <p class="references">* If there are more registrations than the vacancies on this list, the Secretariat holds the
                right to include countries which were not listed as stated on our General Policies, so as
                to guarantee the participation of all duly registered delegates. &nbsp | ** Be aware that although ICJ and IPC members are on the list, they do not represent any country.
            <br/></p>
        </div>
    </div>

</div>
