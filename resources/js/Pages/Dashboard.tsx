import { Head, Link, router, useForm, usePage } from '@inertiajs/react';

import { Layout } from '@/Layouts/Layout';
import PrimaryButton from '@/Components/PrimaryButton';

export default function Welcome() {
  const { props } = usePage();
  const user = props.authUser;
  const { post, processing } = useForm();

  const startPlan = () => {
    post('/start-plan', {
      onSuccess: (page) => {
        router.visit(route('plan.show', { day: 1 }));
      },
    });
  };

  return (
    <Layout backgroundColor="#F3F4F6">
      <Head title="Welcome" />
      <div className="pb-8">
        <div className="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div className="bg-white max-w-4xl mx-auto rounded p-4">
            {!props.hasPlan && (
              <div className="prose justify-center flex flex-col items-center text-center">
                <h2>Uh oh!</h2>
                <p>It looks like you don't have a plan yet!</p>
                <PrimaryButton className="btn btn-action" onClick={startPlan} disabled={processing}>
                  {processing ? 'Starting...' : 'Start Your Plan'}
                </PrimaryButton>
              </div>
            )}
          </div>
        </div>
      </div>
    </Layout>
  );
}
