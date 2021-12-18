export function useFeature (options) {
  if (! options.resolve) {
    throw new Error('The Feature component requires a resolve function.');
  }

  return {
    name: 'Feature',
    resolve: options.resolve,
    fallbackResolver: name => {
      const page = require(`../pages/${name}`).default;

      return page;
    },
  };
};
