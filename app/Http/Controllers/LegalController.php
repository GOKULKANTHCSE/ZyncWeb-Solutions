<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function privacy()
    {
        return view('pages.privacy-policy', [
            'title' => 'Privacy Policy',
            'last_updated' => 'February 11, 2026',
            'sections' => [
                [
                    'heading' => 'Information Collection',
                    'content' => 'We collect information you provide directly to us, such as when you create an account, subscribe to our newsletter, or contact us for support. This may include your name, email address, and phone number.'
                ],
                [
                    'heading' => 'How We Use Information',
                    'content' => 'We use the information we collect to provide, maintain, and improve our services, to develop new ones, and to protect ZyncWeb Solutions and our users.'
                ],
                [
                    'heading' => 'Data Protection',
                    'content' => 'We implement standard security measures to protect your personal information from unauthorized access, alteration, or disclosure.'
                ]
            ]
        ]);
    }

    public function terms()
    {
        return view('pages.terms-and-conditions', [
            'title' => 'Terms & Conditions',
            'last_updated' => 'February 11, 2026',
            'sections' => [
                [
                    'heading' => 'Acceptance of Terms',
                    'content' => 'By accessing and using ZyncWeb Solutions, you accept and agree to be bound by the terms and provision of this agreement.'
                ],
                [
                    'heading' => 'User Responsibilities',
                    'content' => 'Users are responsible for maintaining the confidentiality of their account information and for all activities that occur under their account.'
                ],
                [
                    'heading' => 'Limitation of Liability',
                    'content' => 'ZyncWeb Solutions shall not be liable for any indirect, incidental, special, consequential or punitive damages resulting from your use of the service.'
                ]
            ]
        ]);
    }

    public function refund()
    {
        return view('pages.refund-policy', [
            'title' => 'Refund Policy',
            'last_updated' => 'February 11, 2026',
            'sections' => [
                [
                    'heading' => 'Service Refunds',
                    'content' => 'Our services are billed in advance. While we strive for excellence, if you are not satisfied with our work within the first 14 days, you may be eligible for a partial refund.'
                ],
                [
                    'heading' => 'Cancellation',
                    'content' => 'Subscription services can be cancelled at any time; however, no refunds are provided for the remaining period of the current billing cycle.'
                ]
            ]
        ]);
    }

    public function cookie()
    {
        return view('pages.cookie-policy', [
            'title' => 'Cookie Policy',
            'last_updated' => 'February 11, 2026',
            'sections' => [
                [
                    'heading' => 'What are Cookies?',
                    'content' => 'Cookies are small text files stored on your device to help websites function properly and to provide information to the owners of the site.'
                ],
                [
                    'heading' => 'How We Use Cookies',
                    'content' => 'We use cookies to understand site usage and to improve the content and offerings on our sites.'
                ]
            ]
        ]);
    }

    public function disclaimer()
    {
        return view('pages.legal-template', [
            'title' => 'Disclaimer',
            'last_updated' => 'February 11, 2026',
            'sections' => [
                [
                    'heading' => 'General Information',
                    'content' => 'The information contained on this website is for general information purposes only. While we endeavor to keep the information up to date and correct, we make no representations or warranties of any kind.'
                ],
                [
                    'heading' => 'External Links',
                    'content' => 'Through this website you are able to link to other websites which are not under the control of ZyncWeb Solutions. We have no control over the nature, content and availability of those sites.'
                ]
            ]
        ]);
    }
}
