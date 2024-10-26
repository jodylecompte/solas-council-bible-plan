import { Layout } from '@/Layouts/Layout';
import { Head } from '@inertiajs/react';

import { FaUser } from 'react-icons/fa';

export default function About() {
  return (
    <Layout>
      <Head>
        <title>About</title>
      </Head>
      <div className="prose prose-lg mx-auto mb-8">
        <h1 className="text-5xl font-medium">About</h1>
        <h2 className="text-3xl font-medium">About This Plan</h2>
        <p>
          The Bible reading schedule in this plan is the{' '}
          <a href="https://www.mcheyne.info/calendar.pdf">Robert Murray M‘Cheyne’s Bible Reading Calendar</a>. It was
          compiled by Will Martin and Joshua Johnson of <a href="https://solascouncil.org/">The Solas Council</a> to
          include a balanced reading of not only scripture, but many of the most important church documents in the
          reformed church.
        </p>
        <h2 className="text-3xl font-medium">About The Solas Council</h2>
        <p>
          The Solas Council is a confessionally reformed ministry providing entertaining educational content for young
          adults. Serving as both a wealth of information on reformed faith but also an active community across Discord
          and FaceBook.
        </p>
        <p>
          Learn more on <a href="https://solascouncil.org/">their website</a>. This project is not directly affiliated
          with The Solas Council .
        </p>
        <h2 className="text-3xl font-medium">About This App</h2>
        <p>
          This app was built by <a href="https://jodylecompte.com">Jody LeCompte</a>. While utilizing the underlying
          bible plan plan, I first converted the table available on the Solas Council website into a google sheet, and
          found myself missing the organization and gamification of YouVersion Bible.com app plans and started building
          this.
        </p>
        <p>
          It's code is completely open source and can be located on{' '}
          <a href="https://github.com/jodylecompte/solas-council-bible-plan">Github</a>. It's built using Laravel,
          Interia, and React. Issue repots, pull requests, and suggestions are all welcome and appreciated.
        </p>
      </div>
    </Layout>
  );
}
