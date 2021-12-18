export function useCore (options) {
  if (! options.resolve) {
    throw new Error('The Core component requires a resolve function.');
  }

  return {
    name: 'Core',
    resolve: options.resolve,
    fallbackResolver: name => {
      const page = require(`../pages/${name}`).default;

      return page;
    },
  };
};
