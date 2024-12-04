@extends('layouts.app')

@section('title')
    Case Study: I Love School Crowdfunding Platform
@endsection

@section('fonts')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/promo/Ilove_school.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <!-- Header Section with Logo and Title -->
        <section class="hero-section">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>Case Study: I Love School Crowdfunding Platform</h1>
                        <p class="hero-description">A crowdfunding platform designed to engage the educational community with streamlined tools and features to facilitate school project funding.</p>
                    </div>
                    <div class="hero-image">
                        <img src="{{ asset('images/Ilove_school/Ilove_school_logo.png') }}" alt="I Love School Hero Image">
                    </div>
                </div>
            </div>
        </section>

        <!-- Objective Section -->
        <section class="objective-section">
            <div class="container">
                <h2>Objective</h2>
                <p>To create a crowdfunding platform for schools, enabling easy and secure project funding with a user-friendly interface and powerful backend support.</p>
            </div>
        </section>

        <!-- Solution and Technologies Section -->
        <div class="section">
            <div class="content">
                <div class="task">
                    <h3>Task</h3>
                    <p>The client wanted to develop and launch a platform. Initially, we were only responsible for the frontend, but later the client entrusted us with the entire project. Specifically — to design the database, refine the design, develop the backend, and implement the frontend with responsive layout.</p>
                </div>

                <div class="solution-tech">
                    <div class="solution">
                        <h3>Solution</h3>
                        <p>Once we fully took on the project, we met with the client in person, immersed ourselves in the client's goals and vision, and prepared for full-scale work. As a result, we developed, tested, and launched a responsive web application.</p>
                    </div>
                    <div class="technologies">
                        <h3>Technologies</h3>
                        <ul>
                            <li>Figma</li>
                            <li>Python</li>
                            <li>Django</li>
                            <li>PostgreSQL</li>
                            <li>React</li>
                            <li>Redux</li>
                            <li>Webpack</li>
                            <li>BEM</li>
                            <li>SASS</li>
                            <li>Cypress</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Design Section -->
        <section class="design-section">
            <div class="container">
                <h2>Design Concept</h2>
                <p>The design emphasizes a friendly and accessible interface, tailored for educational institutions. Lo-Fi elements and a simplified color scheme were chosen to align with school branding.</p>
                <img src="{{ asset('images/Ilove_school/Ilove_school_design.webp') }}" alt="Design Concept">
            </div>
        </section>

        <!-- Features Section -->
        <section class="features-section">
            <div class="container">
                <h2>Platform Features</h2>
                <ul>
                    <li>Secure Donations</li>
                    <li>Real-Time Analytics</li>
                    <li>Project Management Dashboard</li>
                    <li>Flexible Payment Options</li>
                    <li>School and Donor Profiles</li>
                </ul>
            </div>
        </section>

        <!-- Results Section -->
        <section class="results-section">
            <div class="container">
                <h2>Results</h2>
                <p>The platform successfully connected schools with donors, with over $50,000 raised in the first year of operation, supporting over 100 school projects.</p>
            </div>
        </section>

        <!-- Contact CTA Section -->
        <section class="contact-cta">
            <div class="container">
                <h2>Interested in a Similar Project?</h2>
                <p>Contact us today to discuss how we can bring your vision to life.</p>
                <a href="{{ url('/contact') }}" class="button">Get in Touch</a>
            </div>
            <div class="contact-section">
                <div class="contact-content">
                    <h2>Хотите реализовать подобный проект?<br>Напишите нам</h2>
                    <form class="contact-form">
                        <input type="text" placeholder="Имя">
                        <input type="email" placeholder="Email">
                        <textarea placeholder="Сообщение"></textarea>
                        <div class="form-buttons">
                            <button type="button" class="attach-file">📎 Прикрепить файлы</button>
                            <button type="submit" class="send-button">Отправить</button>
                        </div>
                    </form>
                    <p class="disclaimer">
                        Нажимая «Отправить», вы даете свое <a href="#">согласие на обработку персональных данных</a> и соглашаетесь с <a href="#">политикой обработки персональных данных</a>.
                    </p>
                </div>
            </div>
        </section>

    </main>
@endsection
