@extends('layouts.app')

@section('title', 'Premium')

{{--
<main class="py-4">
    @yield('components.header')
</main>
--}}

@section('content')
<div class="container px-8 py-4">
    <div class="row justigy-content-center">
        <div class="col-10 mx-auto pb-3">
            <h3><i class="fa-solid fa-file-lines me-2"></i>Privacy Policy</h3>
            <p>
                This Privacy Policy outlines the principles regarding the collection, use, 
                and sharing of information related to the use of the household budget management app (hereinafter referred to as the "App") provided by us. 
                Information collected when users utilize the App will be appropriately protected and treated as confidential in accordance with this policy.
            <BR>
                1. Information Collection
                ・Information provided by users, such as usage of the App and its features, device information, and IP addresses, may be collected.
                2. Use of Information
                ・The collected information will be used for providing the App's services, improving its features, offering support, and implementing security measures.
                ・Information may be shared with third parties in cases where users provide consent or in response to legal requests.
                3. User Rights
                ・Users have the right to access, modify, or delete the personal information collected about them.
                ・Users may choose to discontinue the use of the App if they do not consent to the collection of their information.
                4. Security
                ・We implement technical and organizational security measures to appropriately protect user information.
                ・User information is strictly managed as confidential and measures are taken to prevent unauthorized access or misuse.
            <BR>    
                This Privacy Policy applies to the collection, use, and sharing of information related to the use of the household budget management app. 
                By using the App, users are deemed to have agreed to this policy.          
            </p>
        </div>
    </div>


    <div class="row justigy-content-center">
        <div class="col-10 mx-auto">
                <h3>
                    <i class="fa-solid fa-file-lines me-2"></i>Terms and Conditions
                </h3>
                <p>
                    These terms and conditions (hereinafter referred to as the "Terms") establish provisions regarding the use of the household budget management app (hereinafter referred to as the "App") provided by our company. 
                    By agreeing to these Terms, 
                    you are bound to the use of the App. If you do not agree to any part of these Terms, please refrain from using the App.
                <BR>
                    1. Use of the App
                    To use the App, you must be at least 18 years old or have obtained parental consent if you are a minor.
                    You are responsible for maintaining the confidentiality of your account authentication information and for all activities related to the use of your account.
                    2. Intellectual Property Rights
                    All content, features, and characteristics of the App are owned by our company and are protected by intellectual property laws.
                    You may not modify, reproduce, distribute, or create derivative works of the App without prior written consent from our company.
                    3. Privacy
                    Your privacy is important to us. For details on the collection, use, and disclosure of your information, please refer to our Privacy Policy.
                    4. Limitation of Liability
                    We do not guarantee that the App will be error-free, uninterrupted, or free of viruses or other harmful components.
                    We shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from the use of the App.
                    5. Governing Law
                    These Terms shall be interpreted in accordance with the laws of Japan.
                    6. Changes to the Terms
                    We reserve the right to modify or replace these Terms at any time. Changes will be effective immediately. 
                    By continuing to use the App after the changes, you are deemed to have agreed to the amended terms.
                <BR>    
                    By using the App, you agree to these Terms. If you do not agree to these Terms, please refrain from using the App.        
                </p>
        </div>
    </div>
</div>


{{--
<main class="py-4">
    @yield('footer')
</main>
--}}

@endsection