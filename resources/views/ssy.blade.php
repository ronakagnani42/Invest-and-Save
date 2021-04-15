<!DOCTYPE html>
<html lang="en">
<head>
    <title>SSY Calculator</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

</head>
<body class="antialiased">
    <div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        
        @include('header')

        <div class="max-w-6xl mx-auto mt-8 sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 mx-4">
                   <h2><strong>SSY Calculator</strong></h2>
            </div>

            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 mx-4">
                Latest SSY Interest Rate = 7.6% p.a. (since April   2020)
            </div>

            <div class="mt-8 mx-4  bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1">
                    <!-- <div class="card-header bg-primary text-white text-center font-weight-bold">
                        <h3> SIP Calculator</h3>
                    </div> -->

                    <form class="p-4 row" id="form" >
                        <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                            <label for="investment" class="form-label">YEARLY INVESTMENT</label>
                            <input type="number" min="250" id="investment" value="10000" class="form-control" id="investment">
                        </div>
                                            
                        <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                            <label for="return_rate" class="form-label">EXPECTED RETURN RATE</label>
                            <input  id="return_rate" readonly required value="7.6%" class="form-control" id="return_rate">
                        </div>

                        <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                            <label for="timeperiod" class="form-label">STAY INVESTED FOR</label>
                            <input readonly required value="15 Years" class="form-control" id="timeperiod">
                        </div>
                        <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                            <label for="year" class="form-label">START YEAR(IN YEARS)</label>
                            <input type="number" id="year" value="2021" class="form-control" id="year">
                        </div>
                        <div class="m-3">
                            <button type="submit" class="btn btn-success" id="button">Calculate</button>
                        </div>
                    </form>

                </div>
            </div>
            
            <div class="mx-auto mt-4">
                <table class="table table-bordered calculate hidden">
                    <tr>
                        <th>Total Investment</th>
                        <th class="a">&#8377; </th>
                    </tr>
                    <tr>
                        <th>Interest Gained</th>
                         <th class="b">&#8377; </th>
                    </tr>
                    <tr>
                        <th>Maturity Amount</th>
                        <th class="c">&#8377; </th>
                    </tr>
                    <tr>
                        <th>Expected Returns in</th>
                        <th class="d"> </th>
                    </tr>

                </table>
            </div>        
            <br>
            <div class="mt-8 mx-16 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="card">
                    <h5 class="card-header bg-primary font-weight-bold text-white text-center">What is a SSY Account?</h5>     
                </div> 
                <div class="relative items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0 font-weight-bold"> 
                    <p>
                    Sukanya Samriddhi Yojana or SSY account is a Government of India-backed small deposit scheme for a girl child. 
                    The SSY account is opened anytime after the birth of the girl child until she turns 10 years old. 
                    You may open the SSY account at the post office or any branch of a commercial bank. 
                    You may open the Sukanya Samriddhi Yojana account with a minimum initial deposit of just Rs 250. 
                    The maximum amount you can deposit in the SSY account is Rs 1.5 lakh per financial year. 
                    The SSY account is opened in the name of a girl child to give her a bright future. 
                    The money can be used for higher education or the marriage expenses of a girl child. 
                    The SSY account is operative for 21 years from the date of opening the account, or until the girl child’s marriage after 18. 
                    You could make partial withdrawals up to 50% of the balance amount for higher education expenses of the girl child. 
                    The SSY account currently offers an interest rate of 7.6% p.a. for the January to March quarter of the year 2021. 
                    The amount deposited in the SSY account is eligible for a tax deduction up to Rs 1.5 lakh per year under Section 80C of the Income Tax Act. 
                    The interest you earn on the deposit and the amount withdrawn at maturity are tax-free.
                    </p>
                    
                    <h5 class="card-header font-weight-bold  text-center">What is a SSY Calculator?</h5>     
                 
                    <p>
                    The SSY Calculator is a utility tool that calculates the interest earned and the maturity amount on the SSY account. 
                    If you satisfy the eligibility criteria for the SSY account, use the calculator and determine the maturity value of your investment. 
                    The SSY Calculator consists of a formula box, where you enter the amount of deposit, age of the girl child up to 10 years, and the starting year of the investment. 
                    The calculator shows the total interest and maturity amount.                      
                    </p> 
                    
                    <h5 class="card-header font-weight-bold  text-center">How does SSY Calculators work?</h5>     
                  
                    <p>
                    You must enter the amount of deposit, the age of the girl child, and the year in which you start the investment.
                     The SSY calculator will show you the interest earned on the investment and the maturity amount. 
                     Let us use the mathematical formula: A = P(1+r/n)^nt P = Initial Deposit r = Rate of interest 
                     n = Number of years the interest compounds t = Number of years A = Amount at maturity For example, you deposit 
                     Rs 1,50,000 each year for 15 years in the SSY account. The SSY account offers an interest rate of 7.6% p.a. 
                     Let us calculate the maturity amount after 21 years. (Note: The contribution period for the SSY account is 15 years, while the maturity period is 21 years). 
                     If you deposit Rs 1,50,000 each year for 15 years in the SSY account, you will get Rs 42.48 lakh after 15 years. 
                     You will continue with the SSY account until the end of the maturity period (21 years) without any further deposits.
                     You will get Rs 65.93 lakh at maturity.
                    </p>
                        
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#form").submit(function(e){
                e.preventDefault();
                calculateReturns();
            });

            $("input").keyup(function(e){
                e.preventDefault();
                calculateReturns();
            });

            function calculateReturns(){
                document.getElementById("button").addEventListener("click", function() {
                    console.log("Calculating..");
                    $('.a').empty();
                    $('.b').empty();
                    $('.c').empty();
                    $('.d').empty();
                    var maturityYearOutput = 2036;
                    var maturityAmountOutput = 424000;
                    var A = document.getElementById("investment").value;
                    var investment_amount = A*15;
                    var R = 1;
                    //var annualRate  = document.getElementById("return_rate").value;
                    var N = document.getElementById("year").value;
                    var finalYear = parseInt(N) + 21;
                    var finalAmount = (A / 2 * (Math.pow((1 + 0.076 / 2), 15 * 2) - 1) / (0.076 / 2) * Math.pow((1 + 0.076 / 2), 6 * 2) / 1000) * 1000;
                    var finalInvestment = parseInt(A) * 15;
                    var est_rtn = finalAmount - investment_amount
                    $('.calculate').show();
                    $('.a').append("<p>&#8377;"+investment_amount+"</p>");
                    $('.b').append("<p>&#8377;"+est_rtn.toFixed(3)+"</p>");
                    $('.c').append("<p>&#8377;"+finalAmount.toFixed(3)+"</p>");
                    $('.d').append("<p>"+finalYear+"</p>");
                });
            }
        });

    </script> 
@include('footer')
</body>
</html>