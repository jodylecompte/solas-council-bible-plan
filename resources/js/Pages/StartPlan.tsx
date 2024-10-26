import { Layout } from '@/Layouts/Layout';
import { PageProps } from '@/types';
import { usePage } from '@inertiajs/react';

interface StartPlanProps extends PageProps {
  msg: string;
}

export default function About() {
  const { msg } = usePage<StartPlanProps>().props;

  return (
    <Layout>
      <h2>{msg}</h2>
    </Layout>
  );
}
