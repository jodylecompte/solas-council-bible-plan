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
  const { planData } = usePage<PlanPageProps>().props;

  const previousDay = planData.day > 1 ? planData.day - 1 : null;
  const nextDay = planData.day < 365 ? planData.day + 1 : null;

  const oldTestamentReading = parseScriptureReferences(planData.ot_reading);
  const newTestamentReading = parseScriptureReferences(planData.nt_reading);

  return (
    <Layout>
      <div className="flex justify-center items-center h-full gap-5">
        {/* Left Chevron */}
        {/* <div>
          {previousDay && (
            <Link href={`/plan/${previousDay}`}>
              <span className="text-4xl">{'<'}</span>
            </Link>
          )}
        </div> */}

        {/* Plan Data */}
        <div>
          <h2 className="text-2xl font-bold mb-6">Day {planData.day}</h2>
          <p className="mb-4">
            <div className="font-semibold">Old Testament Reading: </div>
            {oldTestamentReading.map((reading) => (
              <div>
                <PlanLink href={reading.url}>{reading.label}</PlanLink>
              </div>
            ))}
          </p>
          <p className="mb-4">
            <div className="font-semibold">New Testament Reading: </div>
            <div>
              {newTestamentReading.map((reading) => (
                <div>
                  <PlanLink href={reading.url}>{reading.label}</PlanLink>
                </div>
              ))}
            </div>
          </p>
          <p className="mb-4">
            <div className="font-semibold">Daily Creed: </div>
            <div>
              <PlanLink href={planData.creed.url}>The {planData.creed.name} Creed</PlanLink>
            </div>
          </p>
          <p className="mb-4">
            <div className="font-semibold">Daily Confessional: </div>
            <div>
              <PlanLink href={planData.confession.resource_url}>{planData.confession.label}</PlanLink>
            </div>
          </p>
          <p className="mb-4">
            <div className="font-semibold">Daily Catechis: </div>
            <div>
              <PlanLink href={planData.catechism.resource_url}>{planData.catechism.name}</PlanLink>
            </div>
          </p>
        </div>

        {/* Right Chevron */}
        {/* <div>
          {nextDay && (
            <Link href={`/plan/${nextDay}`}>
              <span className="text-4xl">{'>'}</span>
            </Link>
          )}
        </div> */}
      </div>
    </Layout>
  );
}
