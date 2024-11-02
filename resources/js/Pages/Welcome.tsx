import { Head, Link, usePage } from '@inertiajs/react';

import { Layout } from '@/Layouts/Layout';

export default function Welcome() {
  const props = usePage();
  const user = props.props.authUser;

  return (
    <Layout>
      <Head title="Welcome" />
      <div className="prose prose-lg mx-auto !px-0 ">
        <p>
          Welcome to Your Daily Bible Plan, a comprehensive guide to immersing yourself in the entirety of God's Word
          and rich theological wisdom. Whether you're looking to deepen your faith, gain a broader understanding of
          Scripture, or connect more deeply with historic Christian creeds and catechisms, our plan is designed to take
          you on a meaningful journey through the Bible, with insightful readings that refresh your heart and mind
          daily. By following our easy-to-use reading guide, you’ll gain a fuller appreciation for God’s redemptive
          story and the foundational teachings of the Christian faith.
        </p>
        <p>
          Here’s how your reading plan will unfold:
          <ul>
            <li>
              Read the entire Old Testament in a single year, encountering the stories of creation, covenant, kings, and
              prophets that reveal God's unchanging love and faithfulness.
            </li>
            <li>
              Complete the New Testament and Psalms twice, so that you revisit the life of Christ, the teachings of the
              apostles, and the timeless beauty of the Psalms regularly.
            </li>
            <li>
              Dive into a large number of confessions, catechisms, and theological writings from church history,
              including the Heidelberg and Westminster Catechisms, the Apostles' Creed, and other treasured resources,
              giving you a broader understanding of Christian doctrine and worship.
            </li>
          </ul>
        </p>
        <p>
          Join us today and embark on a transformative journey that will deepen your knowledge, strengthen your faith,
          and enrich your spiritual life!
        </p>
      </div>
      <div className="mb-6 mt-10  text-center">
        <Link className="bg-[#7C2424] max-w-[150px] mx-auto p-4 text-white" href={user ? '/plan' : '/login'}>
          Get Started
        </Link>
      </div>
    </Layout>
  );
}
