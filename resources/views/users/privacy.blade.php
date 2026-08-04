@extends('users.layouts.master')

@section('content')

  {{-- Preloader --}}
  <div class="preloader" id="preloader">
    <div class="loader">
      <div class="line-scale-pulse-out-rapid">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>

  <section class="py-0">
    <div class="container-fluid">
      <div class="row">

        {{-- Right: background image panel --}}
        <div class="col-lg-6 px-0 order-lg-2">
          <div class="sticky-top vh-lg-100 py-9">
            <div class="bg-holder"
              style="background-image:url({{ asset('user/assets/img/headers/header-promotion.jpg') }});"
              data-zanim-trigger="scroll"
              data-zanim-lg='{"animation":"zoom-out-slide-left","delay":0.4}'>
            </div>
          </div>
        </div>

        {{-- Left: text content --}}
        <div class="col-lg-6 py-6">
          <div class="row h-100 flex-center">
            <div class="col-lg-10">

              <div class="mb-5">
                <div class="overflow-hidden">
                  <h1 class="text-decoration-underline fs-5 fs-md-4 mb-0"
                    data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">Privacy Policy</h1>
                </div>
              </div>

              <p class="dropcap" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
                At Fashion Nova, your privacy is a priority. This Privacy Policy explains how we collect,
                use, and protect your personal information when you visit FashionNova.com or engage with
                our services. By using our Site, you agree to the practices described below.
              </p>

              {{-- Section 1 --}}
              <div class="mt-5" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">1. Information We Collect</h6>
                </div>
                <p class="text-justify">
                  We collect personal information that you voluntarily provide when you register on
                  FashionNova.com, express interest in our products and services, participate in activities
                  on the Site, or otherwise contact us. This may include your name, email address, phone
                  number, shipping address, payment details, and any other information you choose to provide.
                </p>
              </div>

              {{-- Section 2 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">2. How We Use Your Information</h6>
                </div>
                <p class="text-justify">
                  We use the information we collect to operate, maintain, and improve our Site and services,
                  to communicate with you about your orders and account, to process transactions, to send
                  you marketing and promotional communications about our latest collections and exclusive
                  offers, and to comply with legal obligations.
                </p>
              </div>

              {{-- Section 3 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">3. Cookies and Tracking Technologies</h6>
                </div>
                <p class="text-justify">
                  We use cookies and similar tracking technologies to track activity on our Site and store
                  certain information. Cookies help us enhance your shopping experience, analyze usage,
                  and deliver personalized content, style recommendations, and advertisements. You can
                  control the use of cookies through your browser settings.
                </p>
              </div>

              {{-- Section 4 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">4. Sharing Your Information</h6>
                </div>
                <p class="text-justify">
                  We do not sell, trade, or rent your personal information to third parties. We may share
                  information with service providers who assist us in operating our Site, processing
                  payments, or fulfilling orders, so long as those parties agree to keep this information
                  confidential. We may also disclose information if required by law or to protect our rights.
                </p>
              </div>

              {{-- Section 5 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">5. Data Security</h6>
                </div>
                <p class="text-justify">
                  We implement appropriate technical and organizational measures to protect your personal
                  information from unauthorized access, alteration, disclosure, or destruction. However,
                  no method of transmission over the Internet or electronic storage is 100% secure, and
                  we cannot guarantee absolute security.
                </p>
              </div>

              {{-- Section 6 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">6. Your Rights and Choices</h6>
                </div>
                <p class="text-justify">
                  You have the right to access, correct, update, or delete your personal information at
                  any time through your Fashion Nova account settings. You may also opt out of receiving
                  marketing communications from us by following the unsubscribe instructions in our emails
                  or by contacting us directly.
                </p>
              </div>

              {{-- Section 7 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">7. Third-Party Links</h6>
                </div>
                <p class="text-justify">
                  Our Site may contain links to third-party websites, including social media platforms
                  and partner brands. We are not responsible for the privacy practices or the content of
                  such third-party sites. We encourage you to read the privacy policies of every website
                  you visit.
                </p>
              </div>

              {{-- Section 8 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">8. Children's Privacy</h6>
                </div>
                <p class="text-justify">
                  FashionNova.com does not knowingly collect or solicit personal information from children
                  under the age of 16. If we learn that we have collected personal information from a child
                  under age 16, we will delete that information as quickly as possible. Parents or guardians
                  who believe their child has provided us with personal information may contact us to request
                  its removal.
                </p>
              </div>

              {{-- Section 9 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">9. Changes to This Privacy Policy</h6>
                </div>
                <p class="text-justify">
                  We may update this Privacy Policy from time to time to reflect changes in our practices
                  or for other operational, legal, or regulatory reasons. We will notify you of any material
                  changes by posting the updated Privacy Policy on this page. Your continued use of the
                  Site after any changes constitutes your acceptance of the revised policy.
                </p>
              </div>

              {{-- Section 10 --}}
              <div class="mt-4 mb-6" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">10. Contact Us</h6>
                </div>
                <p class="text-justify">
                  If you have any questions or concerns about this Privacy Policy or how we handle your
                  personal data, please reach out to our dedicated support team.
                </p>

                <blockquote class="blockquote text-center border p-5 px-xl-7 rounded"
                  data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">
                  <p class="blockquote-content">Fashion is built on trust — and so is our relationship with
                    your data. We are committed to being transparent, responsible, and respectful of your
                    privacy at every step.</p>
                  <footer class="blockquote-footer mt-0">
                    <span class="text-body-highlight">Fashion Nova</span> Privacy &amp; Compliance Team
                    &mdash;
                    <a href="mailto:fashionnova.supportfn@gmail.com" class="text-body-emphasis">fashionnova.supportfn@gmail.com</a>
                  </footer>
                </blockquote>

                <p class="text-justify mt-4 fst-italic text-body-tertiary" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                  Fashion Nova Inc. &mdash; 2801 East 46th Street, Vernon, California 90058, United States
                </p>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
