@extends('layout.app')

@section('content')
<div class="container mt-5">
        <h1 class="mb-4 text-center">About Me</h1>

        <!-- Education Section -->
        <div class="d-flex justify-content-between">
            <section>
                <h2>Education</h2>
                <div>
                    <h4>University Name</h4>
                    <p>Degree: Bachelor of Science in Computer Science</p>
                    <p>Graduation Year: 2022</p>
                </div>
            </section>
    
            <!-- Work Experience Section -->
            <section class="mt-4">
                <h2>Work Experience</h2>
                <div>
                    <h4>Company XYZ</h4>
                    <p>Position: Software Developer</p>
                    <p>Duration: January 2022 - Present</p>
                </div>
                <!-- Add more work experience entries as needed -->
            </section>
        </div>

        <!-- Certifications Section -->
        <div class="d-flex justify-content-between">
            <section class="mt-4">
                <h2>Certifications</h2>
                <div>
                    <h4>Certification Name 1</h4>
                    <p>Issuing Organization: XYZ Certification Authority</p>
                    <p>Year: 2023</p>
                </div>
                <!-- Add more certification entries as needed -->
            </section>
    
            <!-- Other Information Section -->
            <section class="mt-4">
                <h2>Other Information</h2>
                <p>Describe yourself and any <br>
                additional information you'd <br> like to share.</p>
            </section>
        </div>
    </div>
@endsection