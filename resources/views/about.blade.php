@extends('layout')

@section('content')
    <style>
        #about-section {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        #about-section h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        #about-section h3 {
            font-size: 1.5rem;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        #about-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        #about-section ul {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-left: 20px;
        }

        #about-section ul li {
            margin-bottom: 5px;
        }
    </style>

    <div id="about-section">
        <h2>About Barangay Officials Project</h2>
        <p>The Barangay Officials project is designed to provide a comprehensive and user-friendly platform for managing and viewing information about barangay officials. This project aims to enhance transparency and accessibility of local government information to the public.</p>

        <h3>Purpose</h3>
        <p>The primary goal of this project is to create an online portal where residents can easily access information about their barangay officials, including their roles, responsibilities, and contact information. This initiative helps to promote better communication and trust between the local government and its constituents.</p>

        <h3>Features</h3>
        <ul>
            <li><strong>User-Friendly Interface</strong>: A clean and intuitive interface for easy navigation.</li>
            <li><strong>Official Profiles</strong>: Detailed profiles of barangay officials, including their contact information and responsibilities.</li>
            <li><strong>Search Functionality</strong>: Allows users to quickly find specific officials or information.</li>
            <li><strong>Responsive Design</strong>: Ensures the platform is accessible on various devices, including desktops, tablets, and smartphones.</li>
            <li><strong>Secure Access</strong>: Protects sensitive information with secure user authentication.</li>
        </ul>

        <h3>Technological Stack</h3>
        <p>This project is built using modern web development technologies to ensure a robust and scalable application:</p>
        <ul>
            <li><strong>Front-End</strong>: Laravel, and Bootstrap for responsive design.</li>
            <li><strong>Back-End</strong>: Laravel framework for server-side logic and database management.</li>
            <li><strong>Database</strong>: MySQL for storing official profiles and related data.</li>
            <li><strong>Version Control</strong>: Git for source code management and collaboration.</li>
        </ul>

        <h3>Future Enhancements</h3>
        <p>We plan to introduce additional features in the future, including:</p>
        <ul>
            <li><strong>Interactive Maps</strong>: Display the geographical locations of barangay offices.</li>
            <li><strong>Event Management</strong>: Announce and manage local events and meetings.</li>
            <li><strong>Feedback System</strong>: Enable residents to provide feedback and suggestions.</li>
        </ul>
    </div>
@endsection
