<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    // List of all supported countries
    private $countries = [
        'saudi-arabia' => 'Saudi Arabia',
        'united-arab-emirates' => 'United Arab Emirates',
        'qatar' => 'Qatar',
        'kuwait' => 'Kuwait',
        'japan' => 'Japan',
        'singapore' => 'Singapore',
        'south-korea' => 'South Korea',
        'malaysia' => 'Malaysia',
        'italy' => 'Italy',
        'poland' => 'Poland',
        'czech-republic' => 'Czech Republic',
        'croatia' => 'Croatia',
        'romania' => 'Romania',
        'bulgaria' => 'Bulgaria',
        'slovakia' => 'Slovakia',
        'moldova' => 'Moldova',
        'serbia' => 'Serbia',
        'north-macedonia' => 'North Macedonia',
        'belarus' => 'Belarus',
        'albania' => 'Albania'
    ];

    // Country-specific service data
    private $countryServices = [
        'saudi-arabia' => [
            'oil-gas' => [
                'title' => 'Oil & Gas Recruitment',
                'overview' => 'We specialize in providing skilled, semi-skilled, and unskilled manpower for the oil and gas sector in Saudi Arabia. Our recruitment solutions are designed to meet the high standards of the industry while ensuring compliance with Saudi labor laws and safety regulations.',
                'expertise' => [
                    'Upstream Operations: Drilling crew, rig operators, geologists, and technical support staff.',
                    'Midstream Operations: Pipeline construction teams, logistics support, and maintenance workers.',
                    'Downstream Operations: Refinery technicians, engineers, welders, and safety officers.',
                    'Support Roles: Administrative staff, drivers, and general laborers for site support.'
                ],
                'features' => [
                    'End-to-end recruitment — sourcing, screening, and trade testing.',
                    'Fast and reliable visa processing and mobilization.',
                    'Compliance with Saudi labor laws and industry safety standards.',
                    'Skilled workforce trained for high-performance and safety compliance.',
                    'Dedicated project coordinators to ensure smooth client communication.'
                ],
                'why_choose' => [
                    'Proven track record in bulk and specialized manpower supply.',
                    'Wide network of qualified candidates across multiple trades.',
                    'Commitment to quality, reliability, and timely deployment.',
                    'Flexible contracts — short-term, project-based, or long-term staffing solutions.'
                ]
            ],
            'construction' => [
                'title' => 'Construction Workers',
                'overview' => 'We specialize in supplying skilled, semi-skilled, and unskilled construction workers to meet the growing demand for infrastructure, industrial, and commercial projects in Saudi Arabia. Our manpower solutions ensure quality, reliability, and compliance with Saudi labor laws and safety standards.',
                'categories' => [
                    'Skilled Workers: Masons, carpenters, steel fixers, plumbers, electricians, and painters.',
                    'Semi-Skilled Workers: Helpers, assistants, and general construction crew.',
                    'Equipment Operators: Crane operators, forklift drivers, excavator operators, and heavy-vehicle drivers.',
                    'Technical & Supervisory Roles: Site supervisors, foremen, safety officers, and quality inspectors.',
                    'Support Staff: Cleaners, logistics workers, and camp support personnel.'
                ],
                'features' => [
                    'End-to-end recruitment and documentation support.',
                    'Fast visa processing and timely deployment.',
                    'Workers trained in safety protocols and site compliance.',
                    'Flexible contracts — short-term projects, long-term assignments, or bulk hiring.',
                    'Dedicated coordinators to ensure seamless communication with clients.'
                ],
                'why_choose' => [
                    'Extensive database of qualified and experienced candidates.',
                    'Proven track record of supplying manpower for mega construction projects in Saudi Arabia.',
                    'Strict adherence to quality and safety standards.',
                    'Cost-effective and reliable recruitment solutions tailored to client needs.'
                ]
            ],
            'healthcare' => [
                'title' => 'Healthcare Staffing',
                'overview' => 'We provide qualified and certified healthcare professionals to meet the growing demand in Saudi Arabia\'s hospitals, clinics, laboratories, and other medical facilities. Our staffing solutions ensure skilled, reliable, and licensed personnel in compliance with Saudi Ministry of Health (MOH) and Saudi Commission for Health Specialties (SCFHS) regulations.',
                'categories' => [
                    'Doctors & Specialists: General practitioners, surgeons, pediatricians, anesthetists, and other specialists.',
                    'Nursing Staff: Registered nurses, critical care nurses, emergency nurses, and midwives.',
                    'Allied Health Professionals: Pharmacists, lab technicians, radiologists, physiotherapists, and dieticians.',
                    'Support Staff: Caregivers, paramedics, medical assistants, and hospital attendants.',
                    'Administrative & Support Roles: Receptionists, medical secretaries, and billing staff.'
                ],
                'features' => [
                    'End-to-end recruitment and documentation support.',
                    'Fast-track licensing and visa processing.',
                    'Placement of experienced and MOH/SCFHS-approved candidates.',
                    'Flexible solutions — full-time, contract, locum, or project-based staffing.',
                    '24/7 support and dedicated account managers for client coordination.'
                ],
                'why_choose' => [
                    'Extensive database of qualified healthcare professionals.',
                    'Experience in serving hospitals, clinics, and government health projects.',
                    'Commitment to quality, compliance, and patient safety standards.',
                    'Cost-effective and reliable staffing solutions tailored to client requirements.'
                ]
            ],
            'security' => [
                'title' => 'Security Jobs',
                'overview' => 'We specialize in providing trained and reliable security personnel to meet the growing demand for commercial, industrial, and residential security services in Saudi Arabia. Our workforce is carefully vetted, trained, and compliant with Saudi regulations and safety standards, ensuring professional protection for every client.',
                'categories' => [
                    'Corporate & Commercial Security: Office buildings, banks, and retail outlets.',
                    'Industrial & Oilfield Security: Factories, refineries, and construction sites.',
                    'Residential & Private Security: Gated community guards, bodyguards, and personal protection personnel.',
                    'Event & Crowd Management Staff: Event security officers, crowd control personnel, and VIP protection staff.',
                    'Specialized Roles: CCTV operators, alarm response teams, and emergency response staff.'
                ],
                'features' => [
                    'Comprehensive background checks and medical screening.',
                    'Workforce trained in customer service, conflict resolution, and emergency response.',
                    'Fast and efficient visa processing and mobilization.',
                    'Availability of short-term, long-term, and project-based contracts.',
                    'Dedicated support for workforce management and client coordination.'
                ],
                'why_choose' => [
                    'Extensive network of trained and experienced security professionals.',
                    'Proven track record of supplying staff for government, corporate, and industrial projects.',
                    'Focus on professionalism, reliability, and cost-effective solutions.',
                    'Compliance with Saudi labor and security regulations.'
                ]
            ],
            'education' => [
                'title' => 'Education & Training',
                'overview' => 'We provide qualified and experienced education and training professionals to meet demand in Saudi Arabia\'s schools, universities, vocational institutes, and corporate training centers. Our solutions ensure highly skilled, certified, and reliable personnel to support academic excellence and workforce development initiatives, in compliance with Saudi education and labor regulations.',
                'categories' => [
                    'Academic Educators: Primary, secondary, and higher education teachers.',
                    'Subject Specialists: Mathematics, Science, English, IT, and Business specialists.',
                    'Vocational & Technical Trainers: Instructors for engineering, construction, healthcare, IT, and technical fields.',
                    'Corporate & Soft Skills Trainers: Business communication, leadership, and management trainers.',
                    'Administrative & Support Staff: Academic coordinators, librarians, lab assistants, and office staff.'
                ],
                'features' => [
                    'End-to-end recruitment and documentation assistance.',
                    'Fast visa processing and timely deployment.',
                    'Staff trained and certified per Saudi Ministry of Education requirements.',
                    'Solutions for short-term, long-term, or contract-based placements.',
                    'Dedicated project managers for client support and workforce monitoring.'
                ],
                'why_choose' => [
                    'Extensive network of qualified education and training professionals.',
                    'Experience in supplying staff for public, private, and international institutions.',
                    'Commitment to quality, reliability, and cultural compatibility.',
                    'Cost-effective and tailored staffing solutions to meet specific project needs.'
                ]
            ]
        ],
        'united-arab-emirates' => [
            'hospitality' => [
                'title' => 'Hospitality & Hotel Staffing',
                'overview' => 'We deliver skilled, professional, and reliable hospitality personnel to support hotels, resorts, restaurants, and event venues across the UAE. Our staffing solutions ensure smooth operations, exceptional guest experiences, and full compliance with UAE labor regulations and industry standards.',
                'categories' => [
                    'Front Office & Guest Services: Receptionists, concierge staff, and guest relations officers',
                    'Food & Beverage Operations: Waiters, bartenders, baristas, and banquet staff',
                    'Culinary & Kitchen Support: Chefs, sous chefs, kitchen assistants, and dishwashers',
                    'Housekeeping & Maintenance: Room attendants, janitorial staff, and maintenance workers',
                    'Event & Conference Support: Event coordinators, banquet servers, and setup crews',
                    'Specialized Roles: Spa therapists, fitness trainers, and VIP service personnel'
                ],
                'features' => [
                    'Comprehensive recruitment, screening, and onboarding of experienced staff',
                    'Workforce trained in customer service, hygiene, and safety standards',
                    'Flexible staffing models - seasonal, temporary, or permanent placements',
                    'On-site coordinators to manage shifts and ensure smooth operations',
                    'Compliance with UAE hospitality and labor regulations'
                ],
                'why_choose' => [
                    'Extensive database of trained and experienced hospitality professionals',
                    'Proven expertise in serving hotels, resorts, restaurants, and event venues',
                    'Scalable, cost-effective staffing solutions tailored to your operational needs',
                    'Commitment to professionalism, reliability, and exceptional guest service'
                ]
            ],
            'it-software' => [
                'title' => 'IT & Software Development Staffing',
                'overview' => 'We provide skilled IT and software development professionals to support businesses, startups, and enterprises across the UAE. Our staffing solutions are tailored to meet the growing demand for digital transformation, enterprise automation, and innovative tech solutions, ensuring highly qualified and reliable talent for both short-term projects and long-term placements.',
                'categories' => [
                    'Software Development: Full-stack developers, backend & frontend developers, mobile app developers (iOS, Android, cross-platform), UI/UX designers and QA testers',
                    'Enterprise Solutions: ERP/CRM specialists (SAP, Oracle, Salesforce, Microsoft Dynamics), cloud engineers (AWS, Azure, Google Cloud), database administrators and analysts',
                    'Cybersecurity & Network Management: Network administrators, security analysts, SOC specialists, penetration testers and risk compliance officers',
                    'AI, Data & Emerging Tech: AI/ML engineers, data scientists, big data analysts, blockchain developers and IoT specialists',
                    'IT Support & Maintenance: System administrators, IT support staff, and helpdesk specialists'
                ],
                'features' => [
                    'End-to-end recruitment and onboarding, including visa and relocation support',
                    'Access to certified professionals with experience in global technologies',
                    'Flexible contracts — project-based, long-term, or remote staffing',
                    'Workforce trained in UAE compliance, industry standards, and security protocols',
                    'Dedicated account managers for smooth coordination and support'
                ],
                'why_choose' => [
                    'Large database of qualified IT professionals across multiple domains',
                    'Proven track record with tech firms, government entities, and global enterprises',
                    'Commitment to quality, efficiency, and cost-effective solutions',
                    'Expertise in matching the right talent with the right project to ensure success'
                ]
            ],
            'construction' => [
                'title' => 'Construction Labor Supply',
                'overview' => 'We specialize in providing skilled, semi-skilled, and unskilled construction labor to meet the workforce demands of infrastructure, industrial, residential, and commercial projects across the UAE. Our manpower solutions ensure high-quality, reliable, and compliant staffing to support the country\'s rapid development while adhering to UAE labor laws and safety standards.',
                'categories' => [
                    'Skilled Workers: Masons, carpenters, electricians, plumbers, painters, steel fixers, and tile setters',
                    'Semi-Skilled Workers: Helpers, assistants, and general site workers',
                    'Heavy Equipment Operators: Crane operators, excavator drivers, forklift operators, and heavy-vehicle drivers',
                    'Technical & Supervisory Roles: Site supervisors, foremen, quality controllers, and safety officers',
                    'Support & Maintenance Staff: Cleaners, camp maintenance, and logistics personnel'
                ],
                'features' => [
                    'End-to-end recruitment and mobilization, including documentation and work permit support',
                    'Workforce trained in safety, quality standards, and operational compliance',
                    'Flexible staffing solutions — short-term, long-term, or project-based contracts',
                    'Rapid deployment for urgent or large-scale workforce requirements',
                    'Dedicated coordinators for smooth communication and workforce management'
                ],
                'why_choose' => [
                    'Extensive database of qualified construction workers for diverse projects',
                    'Proven experience supporting mega construction projects and contractors in the UAE',
                    'Commitment to quality, reliability, and cost-effective staffing solutions',
                    'Full compliance with UAE labor laws and occupational safety regulations'
                ]
            ],
            'banking-finance' => [
                'title' => 'Banking & Finance Professionals',
                'overview' => 'We provide qualified and experienced banking and finance professionals to support the growing demands of banks, financial institutions, investment firms, and fintech companies across the UAE. Our staffing solutions ensure highly skilled, reliable, and compliant professionals to meet dynamic industry requirements while adhering to UAE Central Bank regulations and financial standards.',
                'categories' => [
                    'Banking Operations: Tellers, relationship managers, branch operations staff, and customer service officers',
                    'Finance & Accounting: Accountants, auditors, tax specialists, and payroll officers',
                    'Corporate & Investment Banking: Credit analysts, investment advisors, portfolio managers, and risk managers',
                    'Compliance & Risk Management: AML/KYC officers, compliance analysts, and internal control specialists',
                    'Fintech & Digital Banking: Digital banking specialists, payment system analysts, and data analysts',
                    'Executive & Leadership Roles: CFOs, financial controllers, and senior banking consultants'
                ],
                'features' => [
                    'End-to-end recruitment and onboarding support, including visa processing and documentation',
                    'Access to certified professionals (CFA, ACCA, CPA, CMA, FRM, etc.)',
                    'Flexible hiring solutions — contract, project-based, or permanent staffing',
                    'Workforce trained in UAE banking compliance and international financial standards',
                    'Dedicated account managers for smooth client coordination and workforce support'
                ],
                'why_choose' => [
                    'Wide network of highly qualified financial professionals',
                    'Proven track record with leading banks, investment firms, and corporate finance teams in the UAE',
                    'Commitment to quality, reliability, and cost-effective staffing solutions',
                    'Expertise in matching the right talent with specialized roles to meet client requirements'
                ]
            ]
        ]
        // Additional countries will be added here...
    ];

    public function index()
    {
        return view('countries.index', [
            'countries' => $this->countries
        ]);
    }

    public function show($country)
    {
        if (!array_key_exists($country, $this->countries)) {
            abort(404, 'Country not found');
        }

        $countryName = $this->countries[$country];
        $services = $this->countryServices[$country] ?? [];

        return view('countries.show', [
            'country' => $country,
            'countryName' => $countryName,
            'services' => $services
        ]);
    }

    public function getServiceDetails($country, $service)
    {
        if (!array_key_exists($country, $this->countries)) {
            return response()->json(['error' => 'Country not found'], 404);
        }

        $services = $this->countryServices[$country] ?? [];
        
        if (!array_key_exists($service, $services)) {
            return response()->json(['error' => 'Service not found'], 404);
        }

        return response()->json([
            'service' => $services[$service]
        ]);
    }
}
