---
# Sentry.io integration
#
# Supports:
#
# - Error Tracking
# - Performance Tracing
#
# For more info see: https://docs.sentry.io/platforms/javascript/

dsn:
tags: []
tracesSampleRate: 1.0
---

<? $dsn = $dsn ?? getenv('SENTRY_DSN') ?>

<? if (!empty($dsn)): ?>
    <script src="https://unpkg.com/@sentry/tracing/build/bundle.tracing.min.js" crossorigin="anonymous" ></script>
    <script>
        Sentry.init({
            dsn: "<?= $dsn ?>",
            debug: <?= debug() ?>,
            environment: "<?= getenv('SENTRY_ENVIRONMENT') ?: getenv('APP_ENV') ?>",
            tracesSampleRate: <?= $tracesSampleRate ?? 1.0 ?>,
            integrations: [new Sentry.Integrations.BrowserTracing()],
            initialScope: scope => {
                <?

                if(getenv('FLY_REGION')) {
                    $tags['app.region'] = getenv('FLY_REGION');
                }

                if(getenv('FLY_ALLOC_ID')) {
                    $tags['app.id'] =  hash('crc32b', getenv('FLY_ALLOC_ID'));
                }
                ?>

                scope.setTags(<?= json($tags) ?>);
                return scope;
            },
        });
    </script>
<? endif; ?>