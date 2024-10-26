import { Layout } from '@/Layouts/Layout';
import { usePage, Link } from '@inertiajs/react';
import { PageProps } from '@/types';
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

export default function Plan() {
  const { planData } = usePage<PlanPageProps>().props;

  const previousDay = planData.day > 1 ? planData.day - 1 : null;
  const nextDay = planData.day < 365 ? planData.day + 1 : null;

  return (
    <Layout>
      <div className="flex justify-center items-center h-full gap-5">
        {/* Left Chevron */}
        <div>
          {previousDay && (
            <Link href={`/plan/${previousDay}`}>
              <span className="text-4xl">{'<'}</span>
            </Link>
          )}
        </div>

        {/* Plan Data */}
        <div>
          <h1>Day {planData.day}</h1>
          <p>New Testament Reading: {planData.nt_reading}</p>
          <p>Old Testament Reading: {planData.ot_reading}</p>
          <div>
            Creed: <a href={planData.creed.url}>The {planData.creed.name} Creed</a>
          </div>
          <div>
            Confession: <a href={planData.confession.resource_url}>{planData.confession.label}</a>
          </div>
          <div>
            Catechism: <a href={planData.catechism.resource_url}>{planData.catechism.name}</a>
          </div>
        </div>

        {/* Right Chevron */}
        <div>
          {nextDay && (
            <Link href={`/plan/${nextDay}`}>
              <span className="text-4xl">{'>'}</span>
            </Link>
          )}
        </div>
      </div>
    </Layout>
  );
}
