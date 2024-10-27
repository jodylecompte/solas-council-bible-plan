import { Layout } from '@/Layouts/Layout';
import { usePage, Link } from '@inertiajs/react';
import { PageProps } from '@/types';
import { parseScriptureReferences } from '@/util/BibleParser';
// There's no reason to have this much data but I'll trim this down once the plan day component is finalized
type PlanData = {
  id: number;
  day: number;
  nt_reading: string;
  ot_reading: string;
  progress_ot: number;
  progress_nt: number;
  progress_creed: number;
  progress_catechism: number;
  progress_confession: number;
  progress_day: number;
  user_id: number;
  creed_id: number;
  catechism_id: number;
  confession_id: number;
  created_at: string;
  updated_at: string;
  creed: {
    id: number;
    name: string;
    url: string;
    created_at: string;
    updated_at: string;
  };
  confession: {
    id: number;
    label: string;
    resource_url: string;
    created_at: string;
    updated_at: string;
  };
  catechism: {
    id: number;
    name: string;
    resource_url: string;
    created_at: null;
    updated_at: null;
  };
};

interface PlanPageProps extends PageProps {
  planData: PlanData;
}

type PlanLinkProps = {
  href: string;
  children: React.ReactNode;
};

const PlanLink = ({ href, children }: PlanLinkProps) => {
  return (
    <a href={href} target="_BLANK" className="text-[#7C2424] hover:underline mr-2">
      {children}
    </a>
  );
};

export default function Plan() {
  const { planData, preferredTranslation } = usePage<PlanPageProps>().props;

  console.log('Translation: ', preferredTranslation);

  const previousDay = planData.day > 1 ? planData.day - 1 : null;
  const nextDay = planData.day < 365 ? planData.day + 1 : null;

  const oldTestamentReading = parseScriptureReferences(planData.ot_reading);
  const newTestamentReading = parseScriptureReferences(planData.nt_reading);

  return (
    <Layout backgroundColor="#F3F4F6">
      <div className="max-w-[700px] mx-auto md:w-3/4">
        <div className="overflow-hidden bg-white shadow sm:rounded-lg">
          <div className="px-4 py-6 sm:px-6 flex justify-between items-center">
            <h3 className="text-base font-semibold leading-7 text-gray-900">Day {planData.day} of 365</h3>
            <div className="">
              <button className="btn bg-red-700 text-white btn-ghost hover:bg-red-700">Mark Day Complete</button>
            </div>
          </div>
          <div className="px-4 py-6 sm:px-6">
            <div role="alert" className="alert alert-">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                className="h-6 w-6 shrink-0 stroke-current"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth="2"
                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
              </svg>
              <span>
                Scripture links default to ESV, you can choose a prefered translation in your
                <Link href="/profile" className="underline">
                  {' '}
                  user profile settings
                </Link>
                .
              </span>
            </div>
          </div>
          <div className="border-t border-gray-100">
            <dl className="divide-y divide-gray-100">
              <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt className="text-sm font-medium text-gray-900">Old Testament</dt>
                <dd className="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  {oldTestamentReading.map((reading) => (
                    <div>
                      <PlanLink href={reading.url}>{reading.label} (ESV)</PlanLink>
                    </div>
                  ))}
                </dd>
              </div>
              <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt className="text-sm font-medium text-gray-900">New Testament</dt>
                <dd className="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  {newTestamentReading.map((reading) => (
                    <div>
                      <PlanLink href={reading.url}>{reading.label} (ESV)</PlanLink>
                    </div>
                  ))}
                </dd>
              </div>
              <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt className="text-sm font-medium text-gray-900">Daily Creed</dt>
                <dd className="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <PlanLink href={planData.creed.url}>The {planData.creed.name} Creed</PlanLink>
                </dd>
              </div>
              <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt className="text-sm font-medium text-gray-900">Daily Confession</dt>
                <dd className="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <PlanLink href={planData.confession.resource_url}>{planData.confession.label}</PlanLink>
                </dd>
              </div>
              <div className="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt className="text-sm font-medium text-gray-900">Daily Catechism</dt>
                <dd className="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <PlanLink href={planData.catechism.resource_url}>{planData.catechism.name}</PlanLink>
                </dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </Layout>
  );
}
