---
title: About
description: About Page
---
@extends('_layouts.main')

@section('body')
    <div class="bg-white py-24 md:py-32 lg:py-40">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our team</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for
                    our clients.</p>
            </div>
            <ul role="list" class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-8 xl:col-span-2">
                <li>
                    <img class="aspect-square w-full rounded-2xl object-cover" src="/assets/images/Michael_Faas.jpg" alt="">
                    <h3 class="mt-6 text-lg font-semibold leading-8 text-gray-900">Michael Faas</h3>
                    <p class="text-base leading-7 text-gray-600">Co-Founder & Chief Information Security Officer</p>
                    <p class="mt-4 text-base leading-7 text-gray-600">An experienced cybersecurity leader who saw a
                        need for a more human approach to protecting organizations. After spending years assisting companies in strengthening their defenses, Michael knew that
                        starting with a comprehensive risk assessment provided the necessary baseline to architect effective security
                        programs tailored to each client’s unique needs. We don’t make assumptions – we start by listening and
                        mapping out vulnerabilities to illuminate the best path forward.</p>
                    <ul role="list" class="mt-6 flex gap-x-6">

                        <li>
                            <a href="https://linkedin.com/in/mfaas" target="_tab" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <img class="aspect-square w-full rounded-2xl object-cover" src="/assets/images/alex.jpg" alt=""" alt="">
                    <h3 class="mt-6 text-lg font-semibold leading-8 text-gray-900">Alex Nearing</h3>
                    <p class="text-base leading-7 text-gray-600">Co-Founder & Chief Executive Officer</p>
                    <p class="mt-4 text-base leading-7 text-gray-600">Praesentium iure error aliquam voluptas ut libero. Commodi placeat sit iure nulla officiis. Ut ex sit repellat
                        tempora. Qui est accusamus exercitationem natus ut voluptas. Officiis velit eos ducimus.</p>
                    <ul role="list" class="mt-6 flex gap-x-6">

                        <li>
                            <a href="https://www.linkedin.com/in/alexandernearing/" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <img class="aspect-square w-full rounded-2xl object-cover" src="/assets/images/chris-w.jpg" alt=""" alt="">
                    <h3 class="mt-6 text-lg font-semibold leading-8 text-gray-900">Chris Ward</h3>
                    <p class="text-base leading-7 text-gray-600">Service Director</p>
                    <p class="mt-4 text-base leading-7 text-gray-600">Praesentium iure error aliquam voluptas ut libero. Commodi placeat sit iure nulla officiis. Ut ex sit repellat
                        tempora. Qui est accusamus exercitationem natus ut voluptas. Officiis velit eos ducimus.</p>
                    <ul role="list" class="mt-6 flex gap-x-6">

                        <li>
                            <a href="https://www.linkedin.com/in/chris-ward-828b1271/" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <img class="aspect-square w-full rounded-2xl object-cover"
                        src="https://images.unsplash.com/photo-1505840717430-882ce147ef2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                        alt=""" alt="">
                    <h3 class="mt-6 text-lg font-semibold leading-8 text-gray-900">Chris Hagerman</h3>
                    <p class="text-base leading-7 text-gray-600">Systems Engineer</p>
                    <p class="mt-4 text-base leading-7 text-gray-600">Praesentium iure error aliquam voluptas ut libero. Commodi placeat sit iure nulla officiis. Ut ex sit repellat
                        tempora. Qui est accusamus exercitationem natus ut voluptas. Officiis velit eos ducimus.</p>
                    <ul role="list" class="mt-6 flex gap-x-6">

                        <li>
                            <a href="https://www.linkedin.com/in/chris-hagerman-a2436120/" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- More people... -->
            </ul>
        </div>
    </div>
@endsection
