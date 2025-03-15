@extends('frontend.master')

@section('custom')
    <div class="container_content">
        <div class="container_center">
            <div class="breadcrumbs_outer">
                <nav class="breadcrumbs">
                    <a href="{{ route('frontend.index') }}">Home</a>&ensp;<img src="{{ asset("assets/frontend/img/bullet1.png") }}" alt />&ensp;Privacy Policy
                </nav>
                <div class="breadcrumbs_spacer"></div>
            </div>
            <main class="content_main">
                <div class="view">
                    <h1 class="view_header heading_large">Privacy Policy for Station Select
                    </h1>


                    <p>
                        At Station Select, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and protect the information you provide to us when using our website or services.


                    </p>
                    <h5>Information We Collect:
                    </h5>
                    <p>
                        - Personal Information: When you register an account with Station Select, we collect information such as your name, email address, and any other details you provide voluntarily. <br>
                        - Usage Information: We may collect information about how you interact with our website and services, including your IP address, device information, browser type, pages visited, and other usage data. <br>
                        - Cookies: We use cookies and similar tracking technologies to enhance your browsing experience, customize content, analyze trends, and gather information about user behavior on our site. <br>

                    </p>
                    <h5>How We Use Your Information:
                    </h5>
                    <p>- Personalization: We use the information collected to personalize your experience on Station Select, including recommending stations based on your preferences and improving our services. <br>
                        - Communication: We may use your contact information to send you updates, newsletters, promotional offers, and important notifications related to our services. <br>
                        - Analytics: We analyze user data to understand trends, improve our website functionality, optimize performance, and enhance user experience. <br>

                        .</p>
                    <h5>
                        Data Sharing and Disclosure:
                        </h5>
                    <p>
                        - Third-Party Service Providers: We may share your information with trusted third-party service providers who assist us in operating our website, processing transactions, or delivering services on our behalf. <br>
                        - Legal Compliance: We may disclose your information if required by law, legal process, or government request, or to protect our rights, property, or safety, or that of others. <br>
                        - Consent: We will obtain your consent before sharing your information with third parties for purposes other than those outlined in this Privacy Policy. <br>


                    </p>
                    <h5>Data Security:
                    </h5>
                    <p>
                        - We implement industry-standard security measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction. <br>
                        - While we strive to protect your data, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security. <br>

                    </p>
                    <h5>Your Choices and Rights:
                    </h5>
                    <p>
                        - You have the right to access, update, or delete your personal information by accessing your account settings or contacting us directly. <br>
- You may opt-out of receiving promotional emails or newsletters by following the unsubscribe instructions included in the email or contacting us.

                    </p>
                    <h5>Children's Privacy:
                    </h5>
                    <p>
                        - Station Select is not intended for children under the age of 13. We do not knowingly collect personal information from children, and if we become aware of such information being collected, we will take appropriate steps to delete it.


                    </p>
                    <h5>Changes to This Policy:
                    </h5>
                    <p>
                        - We may update this Privacy Policy periodically to reflect changes in our practices or legal requirements. We will notify you of any significant changes by posting the updated policy on our website.



                    </p>
                    <h5>Contact Us:
                    </h5>
                    <p>
                        If you have any questions, concerns, or feedback regarding our Privacy Policy or data practices, please contact us at info@stationselect.com


                    </p>


                    <p>
                        By using Station Select, you agree to the terms outlined in this Privacy Policy. Please review this policy regularly for updates and changes.

                    </p>


                </div>
            </main>

            @include('frontend.body.side_content')
            <div class="clear"></div>
        </div>
    </div>
@endsection
