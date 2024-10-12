import { Layout } from "@/Layouts/Layout";
import { usePage, Link } from "@inertiajs/react";

export default function Plan() {
    const { planData } = usePage().props as any;

    // Calculate the previous and next day
    const previousDay = planData.day > 1 ? planData.day - 1 : null;
    const nextDay = planData.day < 365 ? planData.day + 1 : null;

    return (
        <Layout>
            <div className="flex justify-center items-center h-full gap-5">
                {/* Left Chevron */}
                <div>
                    {previousDay && (
                        <Link href={`/plan/${previousDay}`}>
                            <span className="text-4xl">{"<"}</span>
                        </Link>
                    )}
                </div>

                {/* Plan Data */}
                <div>
                    <h1>Day {planData.day}</h1>
                    <p>New Testament Reading: {planData.nt_reading}</p>
                    <p>Old Testament Reading: {planData.ot_reading}</p>
                    <div>
                        Creed:{" "}
                        <a href={planData.creed_url}>
                            The {planData.creed} Creed
                        </a>
                    </div>
                </div>

                {/* Right Chevron */}
                <div>
                    {nextDay && (
                        <Link href={`/plan/${nextDay}`}>
                            <span className="text-4xl">{">"}</span>
                        </Link>
                    )}
                </div>
            </div>
        </Layout>
    );
}
